const opciones = document.querySelector(".container-opciones");
const iconoOpciones = document.querySelector("#icono-opciones");

iconoOpciones.addEventListener("click", () =>{
    opciones.classList.toggle("shown");
    document.addEventListener('click', event => {
        if(!opciones.contains(event.target) && event.target !== iconoOpciones){
            opciones.classList.remove("shown");
          document.removeEventListener('click', event);
        }
      });
});