const menu = document.querySelector(".menu");
const hamburgerMenu = document.querySelector(".hamburger-menu");
const iconBars = document.querySelector(".icon-bars");
const iconClose = document.querySelector(".icon-close");

hamburgerMenu.addEventListener("click", displayMenu);

function displayMenu() {
  menu.classList.toggle("tampil");
  
  if (menu.classList.contains("tampil")) {
    iconBars.style.display = 'none';
    iconClose.style.display = 'inline';
  } else {
    iconBars.style.display = 'inline';
    iconClose.style.display = 'none';
  }
}
