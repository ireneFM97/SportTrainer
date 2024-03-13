const recuadroLogin = document.querySelector(".recuadro-login");
const loginLink = document.querySelector(".login-link");
const registroLink = document.querySelector(".registro-link");
const terminos = document.querySelector("#terminos");
const botonRegistro = document.querySelector("#botonRegistro");
const formularioRegistro = document.querySelector("#formulario-registro");
const nombre = document.querySelector("#nombre");
const apellidos = document.querySelector("#apellidos");
const usuario = document.querySelector("#usuario");
const contrasenia = document.querySelector("#contrasenia");
const correo = document.querySelector("#correo");
const patronEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const patronContrasenia = /^.{6,8}$/;
const errorNombre = document.querySelector("#error-nombre");
const errorApellidos = document.querySelector("#error-apellidos");
const errorUsuario = document.querySelector("#error-usuario");
const errorCorreo = document.querySelector("#error-correo");
const errorContrasenia = document.querySelector("#error-contrasenia");
const errorRegistro = document.querySelector("#error-registro");

//Cambiar de formulario de Iniciar sesión a Registro y viceversa
registroLink.addEventListener("click", () => {
    recuadroLogin.classList.add("active");
});

loginLink.addEventListener("click", () => {
    recuadroLogin.classList.remove("active");
});


//Mostrar y ocultar constraseña
const lockClosed = document.querySelector(".material-symbols-outlined");

lockClosed.addEventListener("click", () => {
    console.log("hola")

});


//--------------------Validaciones de registro---------------------------------


formularioRegistro.addEventListener("submit", (event) => {
    if (nombre.value == "" || apellidos.value == "" || usuario.value == "" || correo.value == "" || contrasenia.value == "" || !patronContrasenia.test(contrasenia)) {
        if (nombre.value == "") {
            errorNombre.classList.add("shown");
            nombre.addEventListener("input", () => {
                errorNombre.classList.remove("shown");
            });
            event.preventDefault();
        }

        if (apellidos.value == "") {
            errorApellidos.classList.add("shown");
            apellidos.addEventListener("input", () => {
                errorApellidos.classList.remove("shown");
            });
            event.preventDefault();
        }

        if (usuario.value == "") {
            errorUsuario.classList.add("shown");
            usuario.addEventListener("input", () => {
                errorUsuario.classList.remove("shown");
            });
            event.preventDefault();
        }

        if (contrasenia.value == "") {
            errorContrasenia.classList.add("shown");
            contrasenia.addEventListener("input", () => {
                errorContrasenia.classList.remove("shown");
            });
            event.preventDefault();
        } else if (!patronContrasenia.test(contrasenia.value)) {
            errorContrasenia.classList.add("shown");
            errorContrasenia.innerHTML = "El formato de la contraseña no es correcta";
            contrasenia.addEventListener("input", () => {
                errorContrasenia.classList.remove("shown");
            });
            event.preventDefault();
        }
        if (correo.value == "") {
            errorCorreo.classList.add("shown");
            correo.addEventListener("input", () => {
                errorCorreo.classList.remove("shown");
            });
            event.preventDefault();
        } else if (!patronEmail.test(correo.value)) {
            errorCorreo.classList.add("shown");
            errorCorreo.innerHTML = "El formato del correo no es correcto";
            correo.addEventListener("input", () => {
                errorCorreo.classList.remove("shown");
            });
            event.preventDefault();
        }
    } else {
        event.preventDefault(); 
        //Con el objeto FormData guardo los valores de los inputs que trae el formulario
        let form = new FormData(formularioRegistro);

        //Envío los datos del formulario al servidor (register.php), a través del metodo POST

        fetch('../PHP/register.php', {
            method: 'POST',
            body: form
        })

        //Hago peticiones al servidor
        .then(response => response.json())
        .then(data => {
            
            if (data.message == 'Ya estas registrado con este email. Inicia sesion' || data.message == 'No esta disponible este nombre de usuario. Sigue intentando' || data.message == 'Registro fallido, intentelo de nuevo') {
                errorRegistro.style.backgroundColor = "orange";
                errorRegistro.style.display = "block";
                errorRegistro.innerHTML = `
                <p>${data.message}</p>
                `;
            } else {
                errorRegistro.style.backgroundColor = "green";
                errorRegistro.style.display = "block";
                errorRegistro.innerHTML = `
                <p>${data.message}</p>
                `;

                nombre.value = "";
                apellidos.value = "";
                contrasenia.value = "";
                correo.value = "";
                usuario.value = "";
            }
        });
    }
});
