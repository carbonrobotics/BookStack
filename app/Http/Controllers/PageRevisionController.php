<?php

namespace BookStack\Http\Controllers;

use BookStack\Actions\ActivityType;
use BookStack\Entities\Repos\PageRepo;
use BookStack\Entities\Tools\PageContent;
use BookStack\Exceptions\NotFoundException;
use BookStack\Facades\Activity;
use Ssddanbrown\HtmlDiff\Diff;

class PageRevisionController extends Controller
{
    protected PageRepo $pageRepo;

    public function __construct(PageRepo $pageRepo)
    {
        $this->pageRepo = $pageRepo;
    }

    /**
     * Shows the last revisions for this page.
     *
     * @throws NotFoundException
     */
    public function index(string $bookSlug, string $pageSlug)
    {
        $page = $this->pageRepo->getBySlug($bookSlug, $pageSlug);
        $revisions = $page->revisions()->select([
            'id', 'page_id', 'name', 'created_at', 'created_by', 'updated_at',
            'type', 'revision_number', 'summary',
        ])
            ->selectRaw("IF(markdown = '', false, true) as is_markdown")
            ->with(['page.book', 'createdBy'])
            ->get();

        $this->setPageTitle(trans('entities.pages_revisions_named', ['pageName' => $page->getShortName()]));

        return view('pages.revisions', [
            'revisions' => $revisions,
            'page'      => $page,
        ]);
    }

    /**
     * Shows a preview of a single revision.
     *
     * @throws NotFoundException
     */
    public function show(string $bookSlug, string $pageSlug, int $revisionId)
    {
        $page = $this->pageRepo->getBySlug($bookSlug, $pageSlug);
        $revision = $page->revisions()->where('id', '=', $revisionId)->first();
        if ($revision === null) {
            throw new NotFoundException();
        }

        $page->fill($revision->toArray());
        // TODO - Refactor PageContent so we don't need to juggle this
        $page->html = $revision->html;
        $page->html = (new PageContent($page))->render();

        $this->setPageTitle(trans('entities.pages_revision_named', ['pageName' => $page->getShortName()]));

        return view('pages.revision', [
            'page'     => $page,
            'book'     => $page->book,
            'diff'     => null,
            'revision' => $revision,
        ]);
    }

    /**
     * Shows the changes of a single revision.
     *
     * @throws NotFoundException
     */
    public function changes(string $bookSlug, string $pageSlug, int $revisionId)
    {
        $page = $this->pageRepo->getBySlug($bookSlug, $pageSlug);
        $revision = $page->revisions()->where('id', '=', $revisionId)->first();
        if ($revision === null) {
            throw new NotFoundException();
        }

        $prev = $revision->getPrevious();
        $prevContent = $prev->html ?? '';
        $diff = Diff::excecute($prevContent, $revision->html);

        $page->fill($revision->toArray());
        // TODO - Refactor PageContent so we don't need to juggle this
        $page->html = $revision->html;
        $page->html = (new PageContent($page))->render();
        $this->setPageTitle(trans('entities.pages_revision_named', ['pageName'=>$page->getShortName()]));

        return view('pages.revision', [
            'page'     => $page,
            'book'     => $page->book,
            'diff'     => $diff,
            'revision' => $revision,
        ]);
    }

    /**
     * Restores a page using the content of the specified revision.
     *
     * @throws NotFoundException
     */
    public function restore(string $bookSlug, string $pageSlug, int $revisionId)
    {
        $page = $this->pageRepo->getBySlug($bookSlug, $pageSlug);
        $this->checkOwnablePermission('page-update', $page);

        $page = $this->pageRepo->restoreRevision($page, $revisionId);

        return redirect($page->getUrl());
    }

    /**
     * Deletes a revision using the id of the specified revision.
     *
     * @throws NotFoundException
     */
    public function destroy(string $bookSlug, string $pageSlug, int $revId)
    {
        $page = $this->pageRepo->getBySlug($bookSlug, $pageSlug);
        $this->checkOwnablePermission('page-delete', $page);

        $revision = $page->revisions()->where('id', '=', $revId)->first();
        if ($revision === null) {
            throw new NotFoundException("Revision #{$revId} not found");
        }

        // Check if it's the latest revision, cannot delete the latest revision.
        if (intval($page->currentRevision->id ?? null) === intval($revId)) {
            $this->showErrorNotification(trans('entities.revision_cannot_delete_latest'));

            return redirect($page->getUrl('/revisions'));
        }

        $revision->delete();
        Activity::add(ActivityType::REVISION_DELETE, $revision);
        $this->showSuccessNotification(trans('entities.revision_delete_success'));

        return redirect($page->getUrl('/revisions'));
    }
}
