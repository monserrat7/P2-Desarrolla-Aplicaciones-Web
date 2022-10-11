<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo2.css">
</head>
<body>
    <center>
<?php
    $nombre = $_POST['name'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];

    echo "<h1>Hola $nombre</h1>";
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    echo "Tienes $edad de Edad";
    echo "<br>";
    echo "<br>";
    echo "Tu numero de Teléfono es: $telefono";
    echo "<br>";
    echo "<hr>";

    echo "<a href='../html/greetingForm.html'>Inicio</a>";
    ?>  
    </center>  
</body>
</html>



