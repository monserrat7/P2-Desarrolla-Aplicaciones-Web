<!--
    Descripción: Recibe el Numero para dar su tabla de multiplicar.
    Autor: Itzel Monserrat Salazar Torres. 5PV
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link rel="stylesheet" href="../css/estilos2.css">
</head>
<body>
    <center>
<?php
    $tabla = $_POST['tabla'];

    echo "<h1> Tabla de Multiplicar del $tabla </h1>";
    for ($i=1; $i <=10 ; $i++){
        echo "$i x $tabla = ", $i*$tabla, "<br>";
    }

    echo "<a href='../html/greetingTabla.html'>Inicio</a>";
    ?>  
    </center>  
</body>
</html>
