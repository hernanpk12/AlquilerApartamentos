
function validacionRegistro(){
    let nombre = document.getElementById("nombre").value;
    let email = document.getElementById("correo").value;
    let cuidad = document.getElementById("cuidad").value;
    let password = document.getElementById("password").value;
    let rol = document.getElementById("tipo").selectedIndex;

    if(nombre==null || nombre.length==0 ||  nombre.length!=50 || /^\s+$/.test(nombre)){
        alert ("Numero de caracteres no permitido");
        return false;
    }
    if( email == null || email == 0 ) {
        return false;
    }
    if(cuidad==null || cuidad.length==0 ||  cuidad.length!=24 || /^\s+$/.test(cuidad)){
        alert ("Numero de caracteres no permitido");
        return false;
    }
    if(password.length<5){
        alert( "el password debe tener mas de 5 caracteres");
        return false;
    }
    if( rol == null || rol == 0 ) {
        return false;
    }

}