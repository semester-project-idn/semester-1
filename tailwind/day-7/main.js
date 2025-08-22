const btn = document.getElementById("mobile-open-button");
const menu = document.getElementById("mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");

    if (menu.classList.contains("hidden")) {
        btn.innerHTML = "&#9776;";
    } else {
        btn.innerHTML = "&#10005;";
    }
})