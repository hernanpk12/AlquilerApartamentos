
function validacionApartamento(){
    let cuidad = document.getElementById("cuidad").value;
    let pais = document.getElementById("pais").value;
    let direccion = document.getElementById("direccion").value;
    let ubicacion = document.getElementById("ubicacion").value;
    let habitaciones = document.getElementById("habitaciones").value;
    let valor = document.getElementById("valor").value;


    if(cuidad==null || cuidad.length==0 ||  cuidad.length!=25 || /^\s+$/.test(cuidad)){
        alert ("Numero de caracteres no permitido");
        return false;
    }

    if(pais==null || pais.length==0 ||  pais.length!=25 || /^\s+$/.test(pais)){
        alert ("Numero de caracteres no permitido");
        return false;
    }

    if( direccion == null || direccion.length == 0 || /^\s+$/.test(direccion) ) {
        return false;
    }
    if( ubicacion== null || ubicacion.length == 0 || /^\s+$/.test(ubicacion) ) {
        return false;
    }

    if(habitaciones.length<5){
        alert( "el numero de habitaciones debe tener mas de 5 caracteres");
        return false;
    }

    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        return false;
      }
}
