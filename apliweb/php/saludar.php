<!-- 
    Descripción: Programa que captura datos como, nombre, edad
    correo electronico y genero. Manda un saludo
    Autor: Itzel Monserrat Salazar Torres. 5PV 

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <h2>Programa que Saluda</h2>
	<center>
	
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="" id=""></td>
            </tr>

            <tr>
                <td>Edad</td>
                <td><input type="number" name="" id=""></td>
            </tr>

            <tr>
                <td>Correo Electrónico</td>
                <td><input type="email" name="" id=""></td>
            </tr>

            <tr>
                <td>Género</td>
                <td>
                    <select name="" id="">
                        <option value="">Selecciona...</option>
                        <option value="">Mujer</option>
                        <option value="">Hombre</option>
                        <option value="">Otro</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <button>Saludar</button>
                </td>
            </tr>
        </table>
        <script src="./js/saludar.js"></script>
</body>
</html>