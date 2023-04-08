// popup 
window.addEventListener('DOMContentLoaded', () => {
    const popupimage = document.querySelector('.popup-check');
    const popupDeleteImage = document.querySelector('.dropdown-item-delte');
    const popupContent = document.querySelector('.popup');
    const popupDeletecontent = document.querySelector('.popup-delete');
    const popupimage1 = document.querySelector('.popup-image1');
    const popupDeleteBtncancel = document.querySelector('.popup-image-delete-cancel');
    const tableViw = document.querySelector('.table');
    // checkbox
    const commonCheckbox = document.querySelector('.main-checkbox');
    const chekboxes = Array.from(document.querySelectorAll('.selected_check'));
    // dropdown for table heading 
    const deleteUpadteAll = document.querySelector('.delete_update_all');
    const deleteUpadteShow = document.querySelector('.all-list-type');
    // preview popup
    popupimage.addEventListener('click' , () => {
           if(popupContent.style.display === 'none'){
                popupContent.style.display = 'block';
                tableViw.classList.add('blur-background');
                popupContent.classList.add('animated');
                setTimeout(() => {
                    popupContent.classList.remove('animated');
                },1000)
           }else {
                popupContent.style.display = 'none';
               
           }
    });
    popupimage1.addEventListener('click', () => {
          if(popupContent.style.display === 'block'){
                 popupContent.style.display = 'none';
                 tableViw.classList.remove('blur-background');
          }
    });
    //delete popup
    popupDeleteImage.addEventListener('click', () => {
          if(popupDeletecontent.style.display === 'none'){
            popupDeletecontent.style.display = 'block';
            tableViw.classList.add('blur-background');
            popupDeletecontent.classList.add('animated-delete');
            setTimeout(() => {
                popupDeletecontent.classList.remove('animated-delete')
            },1000);
          }else {
            popupDeletecontent.style.display = 'none';
          }
    });
    popupDeleteBtncancel.addEventListener('click', () => {
          if(popupDeletecontent.style.display === 'block'){
            popupDeletecontent.style.display = 'none';
            tableViw.classList.remove('blur-background');
          }
    });
    //checkbox
    commonCheckbox.addEventListener('click', () => {
        chekboxes.forEach(function(checkbox){
              checkbox.checked = commonCheckbox.checked;
        });
    });
    //dropdown
    deleteUpadteAll.addEventListener('click', () => {
         if(commonCheckbox.checked){
               deleteUpadteShow.style.display = 'block';
         }else {
            deleteUpadteShow.style.display = 'none';
         }
    });
});
