const botonCorreo = document.querySelector(".boton");
const formCorreo = document.querySelector(".fomulario");


formCorreo.addEventListener("submit", (event) => {
    const email = document.querySelector("#emailCorreo1").value;

  if(email == ""){
    Swal.fire({
      icon: 'error',
      title: '¡Vacío!',
      text: 'No puedes dejar el correo vacío',
      showConfirmButton: false,
      timer: 50000
    });
   
  }else{
    Swal.fire({
      icon: 'success',
      title: '¡Mensaje Enviado!',
      text: 'Tu mensaje se ha enviado correctamente.',
      showConfirmButton: false,
      timer: 50000
    });
    
  }
    
  event.preventDefault();
});
