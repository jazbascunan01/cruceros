"use strict";
document.addEventListener("DOMContentLoaded", iniciarPagina);
function iniciarPagina() {
    //Botón para abrir y cerrar el botón hamburguesa del menu
    document.querySelector(".btn_menu").addEventListener("click", toggleMenu);

    function toggleMenu() {
        document.querySelector(".navigation").classList.toggle("show");//Le agrega  y le saca la clase show
    }

    document.querySelectorAll(".route").forEach(i => i.addEventListener("click", toggleMenu));


    if (!!document.getElementById("anterior") && !!document.getElementById("siguiente")) {
        let array_imagenes = ["imagen0.jpg", "imagen1.jpg", "imagen2.jpg", "imagen3.jpg", "imagen4.jpg", "imagen5.jpg"];//arreglo que contiene todas las imagenes
        let contador_imagenes = 0;
        document.getElementById('siguiente').addEventListener('click', cambiar_siguiente);
        document.getElementById('anterior').addEventListener('click', cambiar_anterior);
        function cambiar_siguiente() {
            contador_imagenes++;
            let imagen = document.getElementById("imag");
            if (contador_imagenes > 5)
                contador_imagenes = 0;
            imagen.src = "images/" + array_imagenes[contador_imagenes];
        }
        function cambiar_anterior() {
            contador_imagenes--;
            let imagen = document.getElementById("imag");
            if (contador_imagenes < 0)
                contador_imagenes = 5;
            imagen.src = "images/" + array_imagenes[contador_imagenes];
        }
    }
    /*|¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯|*/
    /*|                                          |*/
    /*|                   MAPA                   |*/
    /*|                                          |*/
    /*|__________________________________________|*/
    if (!!document.getElementById("map")) {
        let map = L.map('map').setView([-38.55565, -58.75411], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker([-38.55565, -58.75411]).addTo(map);
    }
}
