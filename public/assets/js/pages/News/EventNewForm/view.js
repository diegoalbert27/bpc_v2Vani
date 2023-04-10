import AddImage from "./components/add-image.js";

export default class View {
    constructor() {
        this.addImage = new AddImage()
        this.addImage.onClick((url, inputFile) => this.showPreviewImage(url, inputFile))

        this.newImagesSectionPreview = document.getElementById('new_images_section_preview')
    }

    showPreviewImage(url, inputFile) {
        const img = document.createElement('img')
        img.src = url
        img.className = 'w-100 rounded img-fluid'
        img.height = 200
        img.id = `image-${inputFile.id}`

        const removeImage = document.createElement('button')
        removeImage.className = 'btn btn-light mb-2'
        removeImage.innerHTML = '<span class="fas fa-x"><span>'

        const container = document.createElement('div')
        container.className = 'col text-end bg-light p-3'

        removeImage.onclick = () => {
            inputFile.remove()
            container.remove()
        }

        container.appendChild(removeImage)
        container.appendChild(img)

        this.newImagesSectionPreview.appendChild(container)
    }
}
