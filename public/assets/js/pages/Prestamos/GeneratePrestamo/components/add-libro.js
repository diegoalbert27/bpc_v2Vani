export default class AddLibro {
    constructor() {
        this.btns = document.getElementsByClassName('adds-libro')
    }

    onClick(callback) {
        for (const btn of this.btns) {
            btn.onclick = (e) => {
                const { cota, libro } = btn.dataset
                callback({ cota, libro })
            }
        }
    }
}
