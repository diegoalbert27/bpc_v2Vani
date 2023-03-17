export default class AddSolicitante {
    constructor() {
        this.btns = document.getElementsByClassName('adds-solicitante')
    }

    onClick(callback) {
        for (const btn of this.btns) {
            btn.onclick = (e) => {
                const { cedula, name } = btn.dataset
                callback({ cedula, name })
            }
        }
    }
}
