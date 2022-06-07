const editForm = document.querySelector('.profileinfotext-edit')
const infoForm = document.querySelector('.profileinfotext')
const editButton = document.querySelector('#edit-button')
let isEditing = false

editButton.addEventListener('click', () => {
    if(!isEditing){
        infoForm.style.display = 'none'
        editForm.style.display = 'block'
        editButton.textContent = 'Atcelt'
        isEditing = true
    }else if(isEditing){
        infoForm.style.display = 'flex'
        editForm.style.display = 'none'
        editButton.textContent = 'Labot profila informāciju'
        isEditing = false
    }

})