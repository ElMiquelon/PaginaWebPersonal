<?php 
include 'conexion.php';
// Recibir los datos del formulario y almacenarlos en las variables
$material = $_POST["material"];
$ftu = $_POST["ftu"];
$fcu = $_POST["fcu"];
$fyu = $_POST["fyu"];
$E = $_POST["E"];

// Insertar campos
$insertar = "INSERT INTO tblMateriales(material,ftu,fcu,fyu,ModuloYoung) VALUES ('$material',$ftu,$fcu,$fyu,$E)";

$verificar_material = mysqli_query($conexion,"SELECT * FROM tblMateriales WHERE material = '$material'");

if (mysqli_num_rows($verificar_material) > 0) {
    echo '<script>    
         alert("El material ya existe");
         window.history.go(-1);
        </script>';  
    exit;
}else if(empty($material) || empty($ftu) || empty($fcu) || empty($fyu) || empty($E)){
    echo '<script>    
         alert("Por favor, rellene TODOS los campos");
         window.history.go(-1);
        </script>';  
    exit;   
}//else
// Ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
    echo '<script> 
            alert("Error de registro");
            window.history.go(-1);
        </script>';
} else {
    echo '<script> 
            alert("Registro realizado correctamente");
            window.location.replace("./formularioPHP.html");
        </script>';   
}
// Cerrar consultas
mysqli_close($conexion);