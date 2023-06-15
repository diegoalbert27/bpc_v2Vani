export default class RemoveImage {
    constructor() {
        this.btns = document.getElementsByClassName('delete-image')
    }

    onClick(callback) {
        for (const btn of this.btns) {
            const ImagenId = btn.dataset.image
            btn.onclick = () => {
                callback(ImagenId)
            }
        }
    }
}
