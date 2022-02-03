function calcularIMC(){
    let  altura =  document.getElementById("altura").value;
    let  peso =  document.getElementById("peso").value;

 let imc = peso / (altura * altura)

    document.getElementById("resultadoIMC").innerHTML = imc;

    document.getElementById("altura").value = "";
    document.getElementById("peso").value = "";


    if(imc <= 18.5){
    document.getElementById("lblmensajeIMC").innerHTML = " Tienes un IMC muy bajo";
    document.getElementById("agendarCita").style.visibility = "visible";

    }else if (imc>=25){
    document.getElementById("lblmensajeIMC").innerHTML = " Tienes un IMC muy alto";
    document.getElementById("agendarCita").style.visibility = "visible";

    }


}