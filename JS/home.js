const opciones = document.querySelector(".container-opciones");
const iconoOpciones = document.querySelector("#icono-opciones");
const iconoMenu = document.querySelector(".menu");
const opcionesMenu = document.querySelector(".opciones-menu");
const main = document.querySelector("main");
const footer = document.querySelector("footer");
const container = document.querySelector(".container");
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
  main.classList.toggle("hidden");
  footer.classList.toggle("hidden");
  container.classList.toggle("hidden");
  header.classList.toggle("hidden");

  if (iconoMenu.innerHTML == "menu") {
    iconoMenu.innerHTML = "close";
  } else {
    iconoMenu.innerHTML = "menu";
    
  }
});
