document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registro").addEventListener("click", register);


//se declaran las variables
var contenedor_login_registro= document.querySelector(".contenedor__inicio-sesion-registro");
var formulario_login = document.querySelector(".formulario_inicio-de-sesion");
var formulario_register = document.querySelector(".formulario__registro");
var caja_trasera_login = document.querySelector(".caja__trasera-inicio-de-sesion");
var caja_trasera_register = document.querySelector(".caja__trasera-registro");

function iniciarSesion(){
    formulario_register.style.display = "none";
    contenedor_login_registro.style.left = "10px";
    formulario_login.style.display="block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity="0";

}
function register(){
    formulario_register.style.display = "block";
    contenedor_login_registro.style.left = "410px";
    formulario_login.style.display="none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity="1";

}
