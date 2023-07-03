export default class SelectCalification {
    constructor() {
        this.btnsCalification = Array.from(document.getElementsByClassName('btns-calification'))

        this.typeCalification = {
            NEGATIVE: 'negative',
            POSITIVE: 'positive',
            NEUTRAL: 'neutral'
        }
    }

    onClick(callback) {
        for (const currentBtn of this.btnsCalification) {
            currentBtn.onclick = () => {
                if (currentBtn.dataset.type === this.typeCalification.NEGATIVE) {
                    const btnPositive = this.findBtnByType(this.typeCalification.POSITIVE)
                    const btnNeutral = this.findBtnByType(this.typeCalification.NEUTRAL)

                    this.changeColors(btnPositive, 'white', 'success')
                    this.changeColors(btnNeutral, 'white', 'primary')
                    this.changeColors(currentBtn, 'danger', 'white')
                }

                if (currentBtn.dataset.type === this.typeCalification.POSITIVE) {
                    const btnNegative = this.findBtnByType(this.typeCalification.NEGATIVE)
                    const btnNeutral = this.findBtnByType(this.typeCalification.NEUTRAL)

                    this.changeColors(btnNegative, 'white', 'danger')
                    this.changeColors(btnNeutral, 'white', 'primary')
                    this.changeColors(currentBtn, 'success', 'white')
                }

                if (currentBtn.dataset.type === this.typeCalification.NEUTRAL) {
                    const btnPositive = this.findBtnByType(this.typeCalification.POSITIVE)
                    const btnNegative = this.findBtnByType(this.typeCalification.NEGATIVE)

                    this.changeColors(btnPositive, 'white', 'success')
                    this.changeColors(btnNegative, 'white', 'danger')
                    this.changeColors(currentBtn, 'primary', 'white')
                }

                callback(currentBtn.dataset.value)
            }
        }
    }

    changeColors(element, primary, secondary) {
        element.classList.replace(`bg-${secondary}`, `bg-${primary}`)
        element.children[0].classList.replace(`bg-${primary}`, `bg-${secondary}`)
        element.children[0].classList.replace(`text-${secondary}`, `text-${primary}`)
        element.children[1].classList.replace(`text-${primary}`, `text-${secondary}`)
    }

    findBtnByType(type) {
        return this.btnsCalification.find(btn => btn.dataset.type === type)
    }
}
