export default class NavCalendar {
    constructor() {
        this.previus = document.querySelector('.fc-prev-button')
        this.next = document.querySelector('.fc-next-button')
    }

    previusOnClick(callback) {
        this.previus.onclick = (e) => callback()
    }

    nextOnClick(callback) {
        this.next.onclick = (e) => callback()
    }
}
