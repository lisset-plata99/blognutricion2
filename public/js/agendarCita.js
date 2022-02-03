function agendarCita(){


    let  nombrePaciente =  document.getElementById("txtNombre").value;
    var fechaCita = document.getElementById("calendario").value;

    if(nombrePaciente!= ""){

        document.getElementById("lblNombreCita").innerHTML = `Muchas gracias ${nombrePaciente} por registrar tu cita para el dia ${fechaCita}`;
    }else{
        alert("No debes dejar campos vacios");
    }

}