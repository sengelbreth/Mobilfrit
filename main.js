document.addEventListener("DOMContentLoaded", Init);

function Init() {
  document.querySelector("#login").addEventListener("click", openModalLogin);
  document.querySelector("#tilmed").addEventListener("click", openModalTilmed);
  document.querySelector("#close1").addEventListener("click", closeModalLogin);
  document.querySelector("#close2").addEventListener("click", closeModalTilmed);
}
let span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
function openModalLogin() {
  document.querySelector("#Modallogin").style.display = "block";
}

function openModalTilmed() {
  console.log("OI!!");
  document.querySelector("#Modaltilmed").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeModalLogin() {
  document.querySelector("#Modallogin").style.display = "none";
}
function closeModalTilmed() {
  document.querySelector("#Modaltilmed").style.display = "none";
}
