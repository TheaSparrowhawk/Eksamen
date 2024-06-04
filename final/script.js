modal_open = document.getElementById("create_event_btn")

modal_open.addEventListener("click", openModal)

function openModal() {
    modal = document.getElementById("myModal")
    modal.style.display = "block";
}

//pressing x closes modal
function closeModal(){
    modal = document.getElementById("myModal")
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}
