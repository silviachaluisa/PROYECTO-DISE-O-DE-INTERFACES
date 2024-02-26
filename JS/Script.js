//Boton Cancelar
function Regresar(){
    window.location.href="Home.html";
}
function redirigirPagina(){
    window.location.href="Bienvenido.html";

}
// Boton Registrarse
function Volver(){
    window.location.href="IniciarSesion.html";
}
//Boton Salir
function salir(){
    window.location.href="Home.html";
}
//Boton del Menu Hamburguesa
let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}

function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList = "";
    menuVisible = false;
}