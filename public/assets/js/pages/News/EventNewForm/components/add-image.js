export default class AddImage {
    constructor() {
        this.btn = document.getElementById('add-image')
        this.newImagesSection = document.getElementById('new_images_section')
    }

    onClick(callback) {
        this.btn.onclick = () => {
            const inputFile = document.createElement('input')
            inputFile.className = 'd-none'
            inputFile.type = 'file'
            inputFile.name = 'new_images[]'
            inputFile.id = this.newImagesSection.children.length

            inputFile.onchange = () => {
                const [file] = inputFile.files

                if (file) {
                    const url = URL.createObjectURL(file)
                    return callback(url, inputFile)
                }

                callback('Not Url')
            }

            inputFile.click()
            this.newImagesSection.appendChild(inputFile)
        }
    }
}

