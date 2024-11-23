<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mini Tabla PHP</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="./img/pic.jpg">
</head>
<body>
    <nav>
        <div class="contenedorImg">
            <img src="./img/pic.jpg" alt="fotoYo">
        </div>
        <div class="presentacion">
            <p class="nombre">Miguel Angel Rojas Helguera</p>
            <p class="profesion">Estudiante ICOM</p>
        </div>
        <div class="navegacion">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M125-244v-57.5h710v57.5H125Zm0-207.5V-509h710v57.5H125Zm0-207.5v-57.5h710v57.5H125Z"/></svg>
            <div class="navegacionOculta">
                <a href="../index.html">Inicio</a>
                <a href="../ArchivosEncabezado/AcercaDe.html">Acerca de Mí</a>
                <a href="../ArchivosEncabezado/Clientes.php">Clientes</a>
                <a href="../ArchivosEncabezado/Contacto.html">Contacto</a>
            </div>
        </div>
    </nav>

<div class="main">

    <header class="header">
        <h1 class="header-1">Tabla de Materiales</h1>
        <div class="imagen">
            <img src="./img/tbl.png" alt="tblMateriales">
        </div>        
    </header>
    <div class="container my-4">
    <table class="table table-dark table-striped">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Material</th>
          <th scope="col">FTU</th>
          <th scope="col">FCU</th>
          <th scope="col">FYU</th>
          <th scope="col">Módulo de elasticidad</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conexion = mysqli_connect("localhost","root","","dbmateriales");
        if(!$conexion) {
            die("La conexión no fue exitosa");
            exit;
        }
        $sql = "SELECT * FROM tblMateriales";
        $result = mysqli_query($conexion,$sql);
        while($row = mysqli_fetch_array($result)) {
            $id = $row["idMat"];  
            $material = $row["MATERIAL"];  
            $ftu = $row["FTU"];  
            $fcu = $row["FCU"];  
            $fyu = $row["FYU"];
            $e   = $row["ModuloYoung"]; 
            echo "<tr>
                <th scope='row'>$id</th>
                <td>$material</td>
                <td>$ftu</td>
                <td>$fcu </td>
                <td>$fyu</td>
                <td>$e</td>
                </tr>";
            } 
            mysqli_close($conexion);
        ?>
      </tbody>
    </table>
    <a href="formularioPHP.html" class="boton">Formulario</a>
    </div>
</div>



</body>
</html>