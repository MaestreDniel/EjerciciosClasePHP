<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
<body>
    <h1>Agenda de contactos</h1>
    <form name="formulario" method="get" action="">
    <label><h2>Nombre:</h2></label>
    <!-- <input type="text" name="agenda[]"/><br> -->
    <input type="text" name="nombre"/><br>
    <label><h2>Teléfono:</h2></label>
    <input type="text" maxlength="9" name="telefono"/><br><br>
    <input type="submit" name="submit" value="Enviar"/></label><br>
    <h2>Contactos</h2>
    <?php 
        if (isset($_GET)) 
            $agenda = unserialize($_GET['agenda']);
        else
            $agenda = [];
            echo "<label type=hidden for='agenda'></label><input type=hidden id='agenda' name = 'agenda' value=".serialize($agenda).">";

        if (isset($_GET['submit'])) {
            $nombre = filter_input(INPUT_GET, 'nombre');
            $telefono = filter_input(INPUT_GET, 'telefono');
        if (empty($_GET['nombre'])) {
            echo "Es necesario introducir un nombre!<br>";
        } elseif (empty($_GET['telefono'])) {
            unset($agenda[$nombre]); // Para que se borre el contacto al escribir solo su nombre
        } else {
            $agenda[($_GET['nombre'])] = $_GET['telefono'];
        }
    }

        foreach ($agenda as $clave => $valor) {
            echo "<label type=hidden for='agenda'></label><input type=hidden id='agenda' name = 'agenda' value=".serialize($agenda).">";
        }

        if (count($agenda) == 0) {
            echo "<p>La agenda no tiene ningún contacto</p>";
        } else {
            foreach ($agenda as $clave => $valor) {
                echo "<h3> {$clave} : {$valor} </h3>";
            }
        }
    ?>

    </form>
</body>
</html>