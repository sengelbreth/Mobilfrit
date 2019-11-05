document.addEventListener("DOMContentLoaded", Init);

function Init() {
  document.querySelector("#shape").addEventListener("click", openModalTilmed);

  document.querySelector("#close2").addEventListener("click", closeModalTilmed);
}
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal

function openModalTilmed() {
  document.querySelector("#Modaltilmed").style.display = "block";
}

// When the user clicks on <span> (x), close the modal

function closeModalTilmed() {
  document.querySelector("#Modaltilmed").style.display = "none";
}
