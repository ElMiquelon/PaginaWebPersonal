function transformarTemperatura(){
    let entrada, salida, medidaEntrada, medidaSalida;

    entrada = parseFloat(document.querySelector("#inputTemp").value);
    medidaEntrada = parseInt(document.querySelector("#selectorInpTemp").value);
    medidaSalida = parseInt(document.querySelector("#selectorOutTemp").value);

    if(medidaEntrada == medidaSalida){
        salida = "Hola Mundo";
    }else{
        switch(medidaEntrada){
            case 1://C
                switch(medidaSalida){
                    case 2://F
                        salida = (entrada * 1.8) + 32;
                        break;
                    case 3://K
                        salida = entrada + 273.15;
                        break;
                    case 4://R
                        salida = (9 * (entrada + 275.15))/5;
                        break;
                    default: 
                    salida = "Esto no deberia pasar";
                }
                break;
            case 2://F
                switch(medidaSalida){
                    case 1://C
                        salida = (entrada-32) / 1.8;
                        break;
                    case 3://K
                        salida = (entrada - 32) / 1.8 + 273.15;
                        break;
                    case 4://R
                        salida = entrada + 459.67;
                        break;
                    default: 
                    salida = "Esto no deberia pasar";
                }
                break;
            case 3://K
                switch(medidaSalida){
                    case 1://C
                        salida = entrada - 275.15;
                        break;
                    case 2://F
                        salida =  (entrada - 273.15) * 1.8 + 32
                        break;
                    case 4://R
                        salida = 9*entrada / 5; 
                        break;
                    default: 
                    salida = "Esto no deberia pasar";
                }
                break;
            case 4://R
                switch(medidaSalida){
                    case 1://C
                        salida = 5 * (entrada-491.67) / 9
                        break;
                    case 2://F
                        salida = entrada - 459.67;
                        break;
                    case 3://K
                        salida = 5/9 * entrada;
                        break;
                    default: 
                    salida = "Esto no deberia pasar";
                }
                break;
            default:
                salida = "Esto no deberia pasar";
                
            }
        }
    document.querySelector("#outputTemp").value = salida;
}