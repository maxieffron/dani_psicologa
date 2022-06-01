//Todos los items de la lista de la botonera
const menuItems = document.querySelectorAll(".menu-list");
const menu = document.querySelector(".menu-nav_bar");

menuItems.forEach((items) => {
    items.addEventListener("click", function () {
        menu.classList.remove(".menu-nav_bar");
    });
});
