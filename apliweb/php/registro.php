<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style type="text/css">
        .contenido {
            display: table;
        }
        .contenido {
            display: table-caption;
            text-align: center;
            font-weight: bold;
            font-size: larger;
        }
        .Row {
            display: table-row;
        }
        .column {
            display: table-cell;
            border: solid;
            border-width: thin;
            padding-left: 5px;
            padding-right: 5px;


        }

    </style>


</head>
<body><center>
    <!-- Titulo -->
    <div class="header">
        <div class="row1">
            <div class="column1">
                <h1>Registro de Persona</h1>
            </div>
        </div>
    </div>

    <!--Contenido -->

    <div class="contenido">
        <!-- Nombre -->
        <div class="row">
            <div class="column">Nombre</div>
            <div class="column"><input type="text" name="nombre" id="nombre" placeholder="Nombre"></div>
            <div class="column"></div>
        </div>

        <div class="row">
            <div class="column">Edad</div>
            <div class="column"><input type="number" name="edad" id="edad" placeholder="Edad"></div>
            <div class="column"></div>

        </div>

        <div class="row">
            <div class="column">Género</div>
            <div class="column"><input type="radio">F
                                 <input type="radio">M
                                  <input type="radio">Otro</div>
            <div class="column"></div>

        </div>

        <div class="row">
            <div class="column">Grupo</div>
            <div class="column"><select name="" id="">
                <option value="">---</option>
                <option value="">5PV</option>
                <option value="">3PV</option>
                <option value="">1PV</option>
                <option value="">5PM</option>
                <option value="">3PM</option>
                <option value="">1PM</option>
            </select></div>
            <div class="column"></div>

        </div>



    </div>
  </center>  
</body>
</html>