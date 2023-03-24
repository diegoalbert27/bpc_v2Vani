export default class ViewOrganizer {
    constructor() {
        this.btnsViewOrganizers = document.getElementsByClassName('view-organizers')
    }

    onClick(callback) {
        for (const btn of this.btnsViewOrganizers) {
            btn.onclick = () => {
                const { id, state, name } = btn.dataset
                callback(btn, {
                    id,
                    state,
                    name
                })
            }
        }
    }
}
