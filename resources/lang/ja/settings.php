<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '設定',
    'settings_save' => '設定を保存',
    'settings_save_success' => '設定を保存しました',
    'system_version' => 'システムバージョン',
    'categories' => 'カテゴリー',

    // App Settings
    'app_customization' => 'カスタマイズ',
    'app_features_security' => '機能とセキュリティ',
    'app_name' => 'アプリケーション名',
    'app_name_desc' => 'この名前はヘッダーやEメール内で表示されます。',
    'app_name_header' => 'ヘッダーにアプリケーション名を表示する',
    'app_public_access' => 'パブリック・アクセス',
    'app_public_access_desc' => 'このオプションを有効にすると、ログインしていない訪問者があなたのBookStackインスタンスのコンテンツにアクセスできるようになります。',
    'app_public_access_desc_guest' => '一般の訪問者のアクセスは、「ゲスト」ユーザー権限を通じて制御することができます。',
    'app_public_access_toggle' => 'パブリックアクセスを許可',
    'app_public_viewing' => 'アプリケーションを公開する',
    'app_secure_images' => '画像アップロード時のセキュリティを強化',
    'app_secure_images_toggle' => 'より高いセキュリティの画像アップロードを可能にする',
    'app_secure_images_desc' => 'パフォーマンスの観点から、全ての画像が公開になっています。このオプションを有効にすると、画像URLの先頭にランダムで推測困難な文字列が追加され、アクセスを困難にします。',
    'app_default_editor' => 'デフォルトのページエディタ',
    'app_default_editor_desc' => '新しいページを編集するときにデフォルトで使用されるエディタを選択してください。これは権限が許可されているページレベルで上書きできます。',
    'app_custom_html' => 'カスタムheadタグ',
    'app_custom_html_desc' => 'スタイルシートやアナリティクスコード追加したい場合、ここを編集します。これは<head>の最下部に挿入されます。',
    'app_custom_html_disabled_notice' => '重大な変更を元に戻せるよう、この設定ページではカスタムのHTML headコンテンツが無効になっています。',
    'app_logo' => 'ロゴ',
    'app_logo_desc' => '高さ43pxで表示されます。これを上回る場合、自動で縮小されます。',
    'app_primary_color' => 'プライマリカラー',
    'app_primary_color_desc' => '16進数カラーコードで入力します。空にした場合、デフォルトの色にリセットされます。',
    'app_homepage' => 'アプリケーションのホームページ',
    'app_homepage_desc' => 'デフォルトのビューの代わりにホームページに表示するビューを選択します。選択したページの権限は無視されます。',
    'app_homepage_select' => 'ページを選択',
    'app_footer_links' => 'フッタのリンク',
    'app_footer_links_desc' => 'サイトフッタ内に表示するリンクを追加します。これらはログインを必要としないページを含め、ほとんどのページの下部に表示されます。「trans::<key>」のラベルを使用して、システム定義の翻訳を使用できます。例えば「trans::common.privacy_policy」を使用すると翻訳されたテキスト「プライバシーポリシー」が提供され、「trans::common.terms_of_service」を使用すると翻訳されたテキスト「利用規約」が提供されます。',
    'app_footer_links_label' => '表示するテキスト',
    'app_footer_links_url' => 'リンク先の URL',
    'app_footer_links_add' => 'フッタのリンクを追加',
    'app_disable_comments' => 'コメントを無効にする',
    'app_disable_comments_toggle' => 'コメントを無効にする',
    'app_disable_comments_desc' => 'アプリケーション内のすべてのページのコメントを無効にします。既存のコメントは表示されません。',

    // Color settings
    'content_colors' => 'コンテンツの色',
    'content_colors_desc' => 'ページ構成階層のすべての要素に色を設定します。読みやすさを考慮して、デフォルトの色と同じような明るさの色を選ぶことをお勧めします。',
    'bookshelf_color' => '本棚の色',
    'book_color' => 'ブックの色',
    'chapter_color' => 'チャプターの色',
    'page_color' => 'ページの色',
    'page_draft_color' => '下書きページの色',

    // Registration Settings
    'reg_settings' => '登録設定',
    'reg_enable' => '登録を有効にする',
    'reg_enable_toggle' => '登録を有効にする',
    'reg_enable_desc' => '登録を有効にすると、ユーザーはアプリケーションユーザーとしてサインアップできるようになります。登録するとデフォルトの役割が1つ与えられます。',
    'reg_default_role' => '新規登録時のデフォルト役割',
    'reg_enable_external_warning' => '外部のLDAPまたはSAML認証が有効の場合、上記のオプションは無視されます。存在しないメンバーのユーザーアカウントは、使用している外部システムでの認証に成功した場合に自動的に作成されます。',
    'reg_email_confirmation' => '確認メール',
    'reg_email_confirmation_toggle' => 'メールによる確認を行う',
    'reg_confirm_email_desc' => 'ドメイン制限を有効にしている場合はEメール認証が必須となり、この項目は無視されます。',
    'reg_confirm_restrict_domain' => 'ドメイン制限',
    'reg_confirm_restrict_domain_desc' => '特定のドメインのみ登録できるようにする場合、以下にカンマ区切りで入力します。設定された場合、Eメール認証が必須になります。<br>登録後、ユーザは自由にEメールアドレスを変更できます。',
    'reg_confirm_restrict_domain_placeholder' => '制限しない',

    // Maintenance settings
    'maint' => 'メンテナンス',
    'maint_image_cleanup' => '画像のクリーンアップ',
    'maint_image_cleanup_desc' => 'ページや履歴の内容をスキャンして、どの画像や図面が現在使用されているか、どの画像が余っているかをチェックします。この機能を実行する前に、データベースと画像の完全なバックアップを作成してください。',
    'maint_delete_images_only_in_revisions' => 'また、古いページのリビジョンにしか存在しない画像も削除します。',
    'maint_image_cleanup_run' => 'クリーンアップを実行',
    'maint_image_cleanup_warning' => ':count 個、使用されていない可能性のある画像が見つかりました。これらの画像を削除してもよろしいですか？',
    'maint_image_cleanup_success' => '使われていない可能性のある画像を:count個発見し、削除しました。',
    'maint_image_cleanup_nothing_found' => '未使用の画像がないため、何も削除しませんでした。',
    'maint_send_test_email' => 'テストメールを送信',
    'maint_send_test_email_desc' => 'プロフィールに指定されたメールアドレスにテストメールを送信します。',
    'maint_send_test_email_run' => 'テストメールを送信',
    'maint_send_test_email_success' => ':addressにメールを送信しました',
    'maint_send_test_email_mail_subject' => 'テストメール',
    'maint_send_test_email_mail_greeting' => 'メール配信は正常に動作しているようです！',
    'maint_send_test_email_mail_text' => 'おめでとうございます！この通知メールが届いたということは、あなたのメール設定は適切であると思われます。',
    'maint_recycle_bin_desc' => '削除された本棚・ブック・チャプター・ページはごみ箱に送られるため、復元したり完全に削除したりできます。システムの設定によっては、ごみ箱の古いアイテムがしばらくすると自動的に削除される場合があります。',
    'maint_recycle_bin_open' => 'ごみ箱を開く',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'ごみ箱',
    'recycle_bin_desc' => '削除されたアイテムを復元するか、システムから完全に削除できます。このリストは、権限フィルターが適用されているシステム内の同様のアクティビティリストとは異なり、フィルタリングされていません。',
    'recycle_bin_deleted_item' => '削除されたアイテム',
    'recycle_bin_deleted_parent' => '親',
    'recycle_bin_deleted_by' => '削除した人',
    'recycle_bin_deleted_at' => '削除日時',
    'recycle_bin_permanently_delete' => '完全に削除',
    'recycle_bin_restore' => '復元',
    'recycle_bin_contents_empty' => 'ごみ箱は現在空です',
    'recycle_bin_empty' => 'ごみ箱を空にする',
    'recycle_bin_empty_confirm' => 'ごみ箱のすべてのアイテムが、各アイテムに含まれるコンテンツも含めて完全に削除されます。本当にごみ箱を空にしますか？',
    'recycle_bin_destroy_confirm' => 'この操作により、このアイテムと以下にリストされている子要素がシステムから完全に削除され、このコンテンツを復元できなくなります。このアイテムを完全に削除してもよろしいですか？',
    'recycle_bin_destroy_list' => '削除されるアイテム',
    'recycle_bin_restore_list' => '復元されるアイテム',
    'recycle_bin_restore_confirm' => 'この操作により、すべての子要素を含む削除されたアイテムが元の場所に復元されます。元の場所が削除されてごみ箱に入っている場合は、親アイテムも復元する必要があります。',
    'recycle_bin_restore_deleted_parent' => 'このアイテムの親も削除されました。これらは、その親が復元されるまで削除されたままになります。',
    'recycle_bin_restore_parent' => '親を復元',
    'recycle_bin_destroy_notification' => 'ごみ箱から合計:count個のアイテムを削除しました。',
    'recycle_bin_restore_notification' => 'ごみ箱から合計:count個のアイテムを復元しました。',

    // Audit Log
    'audit' => '監査ログ',
    'audit_desc' => 'この監査ログには、システムで追跡されているアクティビティのリストが表示されます。このリストは、権限フィルターが適用されているシステム内の同様のアクティビティリストとは異なり、フィルタリングされていません。',
    'audit_event_filter' => 'イベントフィルター',
    'audit_event_filter_no_filter' => 'フィルターなし',
    'audit_deleted_item' => '削除されたアイテム',
    'audit_deleted_item_name' => '名前: :name',
    'audit_table_user' => 'ユーザー',
    'audit_table_event' => 'イベント',
    'audit_table_related' => '関連アイテムまたは詳細',
    'audit_table_ip' => 'IPアドレス',
    'audit_table_date' => 'アクティビティの日時',
    'audit_date_from' => '開始日',
    'audit_date_to' => '終了日',

    // Role Settings
    'roles' => '役割',
    'role_user_roles' => '役割',
    'role_create' => '役割を作成',
    'role_create_success' => '役割を作成しました',
    'role_delete' => '役割を削除',
    'role_delete_confirm' => '役割「:roleName」を削除します。',
    'role_delete_users_assigned' => 'この役割は:userCount人のユーザに付与されています。該当するユーザを他の役割へ移行できます。',
    'role_delete_no_migration' => "ユーザを移行しない",
    'role_delete_sure' => '本当に役割を削除してよろしいですか？',
    'role_delete_success' => '役割を削除しました',
    'role_edit' => '役割を編集',
    'role_details' => '概要',
    'role_name' => '役割名',
    'role_desc' => '役割の説明',
    'role_mfa_enforced' => '多要素認証を要求する',
    'role_external_auth_id' => '外部認証ID',
    'role_system' => 'システム権限',
    'role_manage_users' => 'ユーザ管理',
    'role_manage_roles' => '役割と権限の管理',
    'role_manage_entity_permissions' => '全てのブック, チャプター, ページに対する権限の管理',
    'role_manage_own_entity_permissions' => '自身のブック, チャプター, ページに対する権限の管理',
    'role_manage_page_templates' => 'ページテンプレートの管理',
    'role_access_api' => 'システムのAPIへのアクセス',
    'role_manage_settings' => 'アプリケーション設定の管理',
    'role_export_content' => 'コンテンツのエクスポート',
    'role_editor_change' => 'ページエディタの変更',
    'role_asset' => 'アセット権限',
    'roles_system_warning' => '上記の3つの権限のいずれかを付与することは、ユーザーが自分の特権またはシステム内の他のユーザーの特権を変更できる可能性があることに注意してください。これらの権限は信頼できるユーザーにのみ割り当ててください。',
    'role_asset_desc' => '各アセットに対するデフォルトの権限を設定します。ここで設定した権限が優先されます。',
    'role_asset_admins' => '管理者にはすべてのコンテンツへのアクセス権が自動的に付与されますが、これらのオプションはUIオプションを表示または非表示にする場合があります。',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => '全て',
    'role_own' => '自身',
    'role_controlled_by_asset' => 'このアセットに対し、右記の操作を許可:',
    'role_save' => '役割を保存',
    'role_update_success' => '役割を更新しました',
    'role_users' => 'この役割を持つユーザー',
    'role_users_none' => 'この役割が付与されたユーザーはいません',

    // Users
    'users' => 'ユーザー',
    'user_profile' => 'ユーザプロフィール',
    'users_add_new' => 'ユーザーを追加',
    'users_search' => 'ユーザー検索',
    'users_latest_activity' => '最新のアクティビティ',
    'users_details' => 'ユーザーの詳細',
    'users_details_desc' => 'このユーザーの表示名とメールアドレスを設定します。メールアドレスは、アプリケーションへのログインに使用されます。',
    'users_details_desc_no_email' => 'このユーザーの表示名を設定して、他のユーザーが認識できるようにします。',
    'users_role' => 'ユーザーの役割',
    'users_role_desc' => 'このユーザーに割り当てる役割を選択します。ユーザーが複数の役割に割り当てられている場合は、それらの役割の権限が重ね合わされ、割り当てられた役割のすべての権限が与えられます。',
    'users_password' => 'ユーザー パスワード',
    'users_password_desc' => 'アプリケーションへのログインに利用するパスワードを設定してください。8文字以上である必要があります。',
    'users_send_invite_text' => 'このユーザーに招待メールを送信してユーザー自身にパスワードを設定してもらうか、あなたがここでパスワードを設定するかを選択できます。',
    'users_send_invite_option' => 'ユーザーに招待メールを送信',
    'users_external_auth_id' => '外部認証ID',
    'users_external_auth_id_desc' => 'これは外部認証システムと通信するときにこのユーザーの照合に使用されるIDです。',
    'users_password_warning' => 'パスワードを変更したい場合のみ入力してください',
    'users_system_public' => 'このユーザーはアプリケーションにアクセスする全てのゲストを表します。ログインはできませんが、自動的に割り当てられます。',
    'users_delete' => 'ユーザを削除',
    'users_delete_named' => 'ユーザ「:userName」を削除',
    'users_delete_warning' => 'ユーザ「:userName」を完全に削除します。',
    'users_delete_confirm' => '本当にこのユーザを削除してよろしいですか？',
    'users_migrate_ownership' => '所有権を移行',
    'users_migrate_ownership_desc' => '別のユーザーをこのユーザーが現在所有しているすべてのアイテムの所有者にする場合は、ここでユーザーを選択します。',
    'users_none_selected' => 'ユーザが選択されていません',
    'users_edit' => 'ユーザー編集',
    'users_edit_profile' => 'プロフィール編集',
    'users_avatar' => 'アバター',
    'users_avatar_desc' => '256pxの正方形である必要があります。',
    'users_preferred_language' => '使用言語',
    'users_preferred_language_desc' => 'このオプションは、アプリケーションのユーザーインターフェイスに使用される言語を変更します。これは、ユーザーが作成したコンテンツには影響しません。',
    'users_social_accounts' => 'ソーシャルアカウント',
    'users_social_accounts_info' => 'アカウントを接続すると、ログインが簡単になります。ここでアカウントの接続を解除すると、そのアカウントを経由したログインを禁止できます。接続解除後、各ソーシャルアカウントの設定にてこのアプリケーションへのアクセス許可を解除してください。',
    'users_social_connect' => 'アカウントを接続',
    'users_social_disconnect' => 'アカウントを接続解除',
    'users_social_connected' => '「:socialAccount」がプロフィールに接続されました。',
    'users_social_disconnected' => '「:socialAccount」がプロフィールから接続解除されました。',
    'users_api_tokens' => 'APIトークン',
    'users_api_tokens_none' => 'このユーザーにはAPIトークンが作成されていません',
    'users_api_tokens_create' => 'トークンを作成',
    'users_api_tokens_expires' => '有効期限',
    'users_api_tokens_docs' => 'APIドキュメント',
    'users_mfa' => '多要素認証',
    'users_mfa_desc' => 'アカウントのセキュリティを強化するために、多要素認証を設定してください。',
    'users_mfa_x_methods' => ':count個の手段が設定されています|:count個の手段が設定されています',
    'users_mfa_configure' => '手段を設定',

    // API Tokens
    'user_api_token_create' => 'APIトークンの作成',
    'user_api_token_name' => '名前',
    'user_api_token_name_desc' => '利用目的を忘れないよう、トークンに読みやすい名前を付けます。',
    'user_api_token_expiry' => '有効期限',
    'user_api_token_expiry_desc' => 'このトークンの有効期限が切れる日付を設定します。この日付を過ぎると、このトークンを使用したリクエストは機能しなくなります。このフィールドを空白のままにすると、100年先に有効期限が設定されます。',
    'user_api_token_create_secret_message' => 'このトークンを作成するとすぐに、「トークンID」と「トークンシークレット」が生成されて表示されます。シークレットは一度しか表示されないため、続行する前に必ず値を安全な場所にコピーしてください。',
    'user_api_token_create_success' => 'APIトークンが正常に作成されました',
    'user_api_token_update_success' => 'APIトークンが正常に更新されました',
    'user_api_token' => 'APIトークン',
    'user_api_token_id' => 'トークンID',
    'user_api_token_id_desc' => 'これは、システムが生成した編集不可能なトークンの識別子で、APIリクエストで提供する必要があります。',
    'user_api_token_secret' => 'トークンシークレット',
    'user_api_token_secret_desc' => 'これは、システムで生成されたトークンシークレットであり、APIリクエストで提供する必要があります。これは一度しか表示されないので、この値を安全な場所にコピーしてください。',
    'user_api_token_created' => 'トークンの作成: :timeAgo',
    'user_api_token_updated' => 'トークンの更新: :timeAgo',
    'user_api_token_delete' => 'トークンを削除',
    'user_api_token_delete_warning' => 'これにより、このAPIトークン「:tokenName」がシステムから完全に削除されます。',
    'user_api_token_delete_confirm' => 'このAPIトークンを削除してもよろしいですか？',
    'user_api_token_delete_success' => 'APIトークンが正常に削除されました',

    // Webhooks
    'webhooks' => 'Webhook',
    'webhooks_create' => 'Webhookを作成',
    'webhooks_none_created' => 'Webhookはまだ作成されていません。',
    'webhooks_edit' => 'Webhookを編集',
    'webhooks_save' => 'Webhookを保存',
    'webhooks_details' => 'Webhookの詳細',
    'webhooks_details_desc' => 'ユーザーフレンドリーな名前とWebhookデータの送信先にするPOSTエンドポイントを指定します。',
    'webhooks_events' => 'Webhookのイベント',
    'webhooks_events_desc' => 'このWebhookの呼び出しをトリガーするすべてのイベントを選択します。',
    'webhooks_events_warning' => 'これらのイベントはカスタム権限が適用されている場合でも、選択したすべてのイベントに対してトリガーされることに注意してください。このWebhookの利用により機密コンテンツが公開されないことを確認してください。',
    'webhooks_events_all' => '全てのシステムイベント',
    'webhooks_name' => 'Webhook名',
    'webhooks_timeout' => 'Webhookリクエストタイムアウト (秒)',
    'webhooks_endpoint' => 'Webhookエンドポイント',
    'webhooks_active' => '有効なWebhook',
    'webhook_events_table_header' => 'イベント',
    'webhooks_delete' => 'Webhookを削除',
    'webhooks_delete_warning' => 'これにより、このWebhook「:webhookName」がシステムから完全に削除されます。',
    'webhooks_delete_confirm' => 'このWebhookを削除してよろしいですか？',
    'webhooks_format_example' => 'Webhookのフォーマット例',
    'webhooks_format_example_desc' => 'Webhookのデータは、設定されたエンドポイントにPOSTリクエストにより以下のフォーマットのJSONで送信されます。related_item と url プロパティはオプションであり、トリガーされるイベントの種類によって異なります。',
    'webhooks_status' => 'Webhookの状態',
    'webhooks_last_called' => '最後の実行:',
    'webhooks_last_errored' => '最後のエラー:',
    'webhooks_last_error_message' => '最後のエラーのメッセージ:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
