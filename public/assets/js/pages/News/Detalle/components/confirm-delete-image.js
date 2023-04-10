export default class ConfirmDeleteImage {
    constructor() {
        this.btn = document.getElementById('confirm-delete-image')
    }

    setHref(link) {
        this.btn.href = link
    }
}
