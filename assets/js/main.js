//Todos los items de la lista de la botonera
const menuItems = document.querySelectorAll(".menu-list");
const menu = document.querySelector(".menu-nav_bar");

//Item del menú que se encuentra seleccionado
let itemActive = "";

menuItems.forEach((items) => {
    items.addEventListener("click", function () {
        menu.classList.remove(".menu-nav_bar");
    });
});

//Cada vez que clickeamos sobre un enlace del menú, llamamos al evento "click" del nav.bar,para replicar el efecto de subir la barra de navegación.
document.querySelectorAll(".nav-item").forEach((element) => {
    element.addEventListener("click", () => {
        document.querySelector(".navbar-toggler").click();

        //Guardamos el elemento actual que tiene la clase "active"
        itemActive = document.querySelector(".active");

        if (!itemActive == element.classList.contains("active")) {
            //Si son diferentes, removemos la clase "active" de item anterior y lo asignamos
            //al elemento actual.
            itemActive.classList.remove("active");
            element.classList.add("active");
        }
    });
});
