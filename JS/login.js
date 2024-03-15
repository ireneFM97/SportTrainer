const recuadroLogin = document.querySelector(".recuadro-login");
const loginLink = document.querySelector(".login-link");
const registroLink = document.querySelector(".registro-link");
const formularioRegistro = document.querySelector("#formulario-registro");
const formularioLogin = document.querySelector("#formulario-login");
const patronEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const patronContrasenia = /^.{6,8}$/;
const lockClosed = document.querySelector(".icono-candado");
const contraseniaInput = document.getElementById("contrasenia-login");

//Cambiar de formulario de Iniciar sesión a Registro y viceversa
registroLink.addEventListener("click", () => {
    recuadroLogin.classList.add("active");
});

loginLink.addEventListener("click", () => {
    recuadroLogin.classList.remove("active");
});


//Mostrar y ocultar constraseña

lockClosed.addEventListener("click", () => {
    if (lockClosed.innerHTML == "lock") {
        lockClosed.innerHTML = "lock_open_right";
        contraseniaInput.type = "text";
    } else {
        lockClosed.innerHTML = "lock";
        contraseniaInput.type = "password";
    }

});


//--------------------Validaciones de registro---------------------------------

formularioRegistro.addEventListener("submit", (event) => {
    const nombre = document.querySelector("#nombre");
    const apellidos = document.querySelector("#apellidos");
    const usuario = document.querySelector("#usuario");
    const contrasenia = document.querySelector("#contrasenia");
    const correo = document.querySelector("#correo");
    const errorNombre = document.querySelector("#error-nombre");
    const errorApellidos = document.querySelector("#error-apellidos");
    const errorUsuario = document.querySelector("#error-usuario");
    const errorCorreo = document.querySelector("#error-correo");
    const errorContrasenia = document.querySelector("#error-contrasenia");
    const errorRegistro = document.querySelector("#error-registro");


    if (nombre.value == "" || apellidos.value == "" || usuario.value == "" || correo.value == "" || contrasenia.value == "" || !patronContrasenia.test(contrasenia.value)) {
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
            errorContrasenia.innerHTML = "Formato de la contraseña incorrecto";
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
        let formRegistro = new FormData(formularioRegistro);

        //Envío los datos del formulario al servidor (register.php), a través del metodo POST

        fetch('../PHP/register.php', {
            method: 'POST',
            body: formRegistro
        })

            //Hago peticiones al servidor
        .then(respuestaRegistro => respuestaRegistro.json())
        .then(data => {

                if (data.message == 'Este email ya existe. Inicia sesion' || data.message == 'Nombre de usuario no disponible. Sigue intentandolo' || data.message == 'Registro fallido, intentelo de nuevo') {
                    errorRegistro.style.backgroundColor = "orange";
                    errorRegistro.style.display = "flex";
                    errorRegistro.innerHTML =
                    `
                        <p>${data.message}</p>
                    `
                } else {
                    errorRegistro.style.backgroundColor = "green";
                    errorRegistro.style.display = "flex";
                    errorRegistro.innerHTML =
                    `
                        <p>${data.message}</p>
                    `

                    nombre.value = "";
                    apellidos.value = "";
                    contrasenia.value = "";
                    correo.value = "";
                    usuario.value = "";
                }
            });
    }
});

//--------------------Validaciones de login---------------------------------

formularioLogin.addEventListener("submit", (event) => { 
    const correoLogin = document.querySelector("#correo-login"); 
    const contraseniaLogin = document.querySelector("#contrasenia-login");
    const errorCorreoLogin =  document.querySelector("#error-correo-login");
    const errorContraseniaLogin =  document.querySelector("#error-contrasenia-login");
    const errorLogin = document.querySelector("#error-login");

    if (correoLogin.value == "" || contraseniaLogin.value == "" || !patronContrasenia.test(contraseniaLogin.value)) { 
        if (correoLogin.value == "") {
            errorCorreoLogin.classList.add("shown");
            correoLogin.addEventListener("input", () => {
                errorCorreoLogin.classList.remove("shown");
            });
            event.preventDefault();
        }

        if (contraseniaLogin.value == "") {
            errorContraseniaLogin.classList.add("shown");
            contraseniaLogin.addEventListener("input", () => {
                errorContraseniaLogin.classList.remove("shown");
            });
            event.preventDefault();
        } else if (!patronContrasenia.test(contraseniaLogin.value)) {
            errorContraseniaLogin.classList.add("shown");
            errorContraseniaLogin.innerHTML = "Formato de la contraseña incorrecto";
            contraseniaLogin.addEventListener("input", () => {
                errorContraseniaLogin.classList.remove("shown");
            });
            event.preventDefault();
        }
    } else {
        event.preventDefault();
        //Con el objeto FormData guardo los valores de los inputs que trae el formulario
        let formLogin = new FormData(formularioLogin);

        //Envío los datos del formulario al servidor (login.php), a través del metodo POST

        fetch('../PHP/login.php', {
            method: 'POST',
            body: formLogin
        })

            //Hago peticiones al servidor
        .then(respuestaLogin => respuestaLogin.json())
        .then(data => {

            if (data.messageLogin == 'Email o contraseña incorrectos') {
                errorLogin.style.backgroundColor = "orange";
                errorLogin.style.display = "flex";
                errorLogin.innerHTML =
                `
                    <p>${data.messageLogin}</p>
                `
            } else {
                location.href = '../HTML/home.php';
            }
        });
    }
});