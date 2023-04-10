import AddImage from "./components/add-image.js";
import ConfirmDeleteImage from "./components/confirm-delete-image.js";
import RemoveImage from "./components/remove-image.js";

export default class View {
    constructor() {
        this.removeImage = new RemoveImage()
        this.removeImage.onClick((ImagenId) => this.removeImagenById(ImagenId))

        this.confirmDeleteImage = new ConfirmDeleteImage()

        this.addImage = new AddImage()
        this.addImage.onClick((file, inputFile) => this.showFileImage(file, inputFile))

        this.saveImages = document.getElementById('save-images')
        this.previewListImages = document.getElementById('preview-list-images')
    }

    showFileImage(file, inputFile) {
        this.saveImages.classList.remove('d-none')

        const urlFile = URL.createObjectURL(file)

        const li = document.createElement('li')
        li.className = 'list-group-item d-flex justify-content-between'
        li.innerHTML = `
            <a class="link link-primary" href="${urlFile}" target="_blank">${file.name}</a>
        `

        const btnRemoveFile = document.createElement('button')
        btnRemoveFile.className = 'btn btn-sm btn-outline-danger'
        btnRemoveFile.innerHTML = `<span class="fas fa-x align-center"></span>`
        btnRemoveFile.onclick = () => {
            inputFile.remove()
            li.remove()

            if (this.previewListImages.children.length === 0) {
                this.saveImages.classList.add('d-none')
            }
        }

        li.appendChild(btnRemoveFile)

        this.previewListImages.appendChild(li)
    }

    removeImagenById(ImagenId) {
        const link = `?controller=news&action=deleteNewImage&id=${ImagenId}`
        this.confirmDeleteImage.setHref(link)
    }
}
