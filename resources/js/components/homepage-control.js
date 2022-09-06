
class HomepageControl {

    constructor(elem) {
        this.elem = elem;
        this.typeControlUser = elem.querySelector('[name="setting-app-homepage-type-user"]');
        this.pagePickerContainerUser = elem.querySelector('[page-picker-container-user]');
        this.typeControlUser.addEventListener('change', this.controlPagePickerVisibility.bind(this));
 
        this.typeControlPublic = elem.querySelector('[name="setting-app-homepage-type-public"]');
        this.pagePickerContainerPublic = elem.querySelector('[page-picker-container-public]');
        this.typeControlPublic.addEventListener('change', this.controlPagePickerVisibility.bind(this));

        this.controlPagePickerVisibility();
    }

    controlPagePickerVisibility() {
        const showPagePickerUser = this.typeControlUser.value === 'page';
        this.pagePickerContainerUser.style.display = (showPagePickerUser ? 'block' : 'none');

        const showPagePickerPublic = this.typeControlPublic.value === 'page';
        this.pagePickerContainerPublic.style.display = (showPagePickerPublic ? 'block' : 'none');
    }



}

export default HomepageControl;