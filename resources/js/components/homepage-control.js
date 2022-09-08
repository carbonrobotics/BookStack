
class HomepageControl {

    constructor(elem) {
        this.elem = elem;
        this.typeControl = elem.querySelector('[name="setting-app-homepage-type"]');
        this.pagePickerContainer = elem.querySelector('[page-picker-container]');
        this.typeControl.addEventListener('change', this.controlPagePickerVisibility.bind(this));
 
        this.typeControlPublic = elem.querySelector('[name="setting-app-homepage-type-public"]');
        this.pagePickerContainerPublic = elem.querySelector('[page-picker-container-public]');
        this.typeControlPublic.addEventListener('change', this.controlPagePickerVisibility.bind(this));

        this.controlPagePickerVisibility();
    }

    controlPagePickerVisibility() {
        const showPagePicker = this.typeControl.value === 'page';
        this.pagePickerContainer.style.display = (showPagePicker ? 'block' : 'none');

        const showPagePickerPublic = this.typeControlPublic.value === 'page';
        this.pagePickerContainerPublic.style.display = (showPagePickerPublic ? 'block' : 'none');
    }



}

export default HomepageControl;