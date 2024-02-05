const recuadroLogin = document.querySelector(".recuadro-login");
const loginLink = document.querySelector(".login-link");
const registroLink = document.querySelector(".registro-link");

registroLink.addEventListener("click" , ()=> {
    recuadroLogin.classList.add("active");
});

loginLink.addEventListener("click" , ()=> {
    recuadroLogin.classList.remove("active");
});


//---------------Mostrar y ocultar constraseña
const lockClosed = document.querySelector(".material-symbols-outlined");

lockClosed.addEventListener("click", ()=>{
    console.log("hola")
   
});
