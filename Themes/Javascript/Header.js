  // Wait for the page to load before running this code
  window.addEventListener('DOMContentLoaded', () => {
    // Get a reference to the button element for event
    let myButton = document.querySelector('.search_image');
    // Get a reference to the button element for clear button
    let worngBtn = document.querySelector('.wrong_image');
    myButton.onclick = function(){
    document.querySelector('.search_icon').classList.toggle('active');
    }
    worngBtn.onclick = function(){
    document.getElementById('input_id').value = "";
    }
 });