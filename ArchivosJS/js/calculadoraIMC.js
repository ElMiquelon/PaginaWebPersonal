function calcularIMC(){
    let masa, estatura, imc, bgColor, color, consejo;

    masa = parseFloat(document.getElementById("masa").value);
    estatura = parseFloat(document.getElementById("estatura").value);

    if(masa <= 0 || estatura <= 0){
        imc = "Chistosito, eh?";
        color = "#000";
        bgColor = "#fff";
        consejo = "Hola Mundo";
    }else{
        imc = masa / (estatura * estatura);
        imc = imc.toFixed(3);
        if(imc > 40){
            bgColor = "red";
            color = "white";
            consejo = "Ya no comas gorditas de nata";
        }else if (imc >= 35){
            bgColor = "orangered";
            color = "white";
            consejo = "Bajale mucho a las gorditas de nata";
        }else if (imc >= 30){
            bgColor = "orange";
            color = "black";
            consejo = "Bajale a las gorditas de nata";
        }else if (imc >= 25){
            bgColor = "yellow";
            color = "black";
            consejo = "Bajale tantillo a las gorditas de nata";
        }else if (imc >= 18.5){
            bgColor = "green";
            color = "black";
            consejo = "Sigue disfrutando las gorditas de nata";
        }else{
            bgColor = "skyblue";
            color = "black";
            consejo = "Subele a las gorditas de nata";
        }
    }

    document.getElementById("outputIMC").value = imc;
    document.getElementById("outputIMC").style.color = color;
    document.getElementById("outputIMC").style.backgroundColor = bgColor;
    document.getElementById("consejoMillonario").textContent = consejo;


}