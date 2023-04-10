export default class AddImage {
    constructor() {
        this.btn = document.getElementById('add-image')
        this.imagesSection = document.getElementById('images-section')
    }

    onClick(callback) {
        this.btn.onclick = () => {
            const inputFile = document.createElement('input')
            inputFile.type = 'file'
            inputFile.className = 'd-none'
            inputFile.name = 'news_images[]'
            inputFile.id = this.imagesSection.children.length
            inputFile.onchange = () => {
                const [file] = inputFile.files
                callback(file, inputFile)
            }

            inputFile.click()

            this.imagesSection.appendChild(inputFile)
        }
    }
}
