const opciones = document.querySelector(".container-opciones");
const iconoOpciones = document.querySelector("#icono-opciones");
const iconoMenu = document.querySelector(".menu");
const opcionesMenu = document.querySelector(".opciones-menu");
const main = document.querySelector("main");
const footer = document.querySelector("footer");
const container = document.querySelector(".container");
const nContainer = document.querySelector(".n-container");
const sContainer = document.querySelector(".s-container");
const cContainer = document.querySelector(".c-container");
const header = document.querySelector("header");

iconoOpciones.addEventListener("click", () =>{
    opciones.classList.toggle("shown");
    document.addEventListener('click', event => {
        if(!opciones.contains(event.target) && event.target !== iconoOpciones){
            opciones.classList.remove("shown");
          document.removeEventListener('click', event);
        }
      });
});



iconoMenu.addEventListener("click", () => {
  opcionesMenu.classList.toggle("shown");
  if(location.href == "http://localhost/Pruebas/Proyecto/Vistas/nosotros.php"){
      nContainer.classList.toggle("hidden");
  }else if(location.href == "http://localhost/Pruebas/Proyecto/Vistas/home.php"){
    container.classList.toggle("hidden");
  }else if(location.href == "http://localhost/Pruebas/Proyecto/Vistas/servicios.php"){
    sContainer.classList.toggle("hidden");
  }else if(location.href == "http://localhost/Pruebas/Proyecto/Vistas/contacto.php"){
    cContainer.classList.toggle("hidden");
  }
  main.classList.toggle("hidden");
  footer.classList.toggle("hidden");
  header.classList.toggle("hidden");
  if (iconoMenu.innerHTML == "menu") {
    iconoMenu.innerHTML = "close";
  } else {
    iconoMenu.innerHTML = "menu";
    
  }
});
