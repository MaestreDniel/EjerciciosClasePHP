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
    <input type="text" name="nombre"/><br>
    <label><h2>Teléfono:</h2></label>
    <input type="text" maxlength="9" name="telefono"/><br><br>
    <input type="submit" name="submit" value="Enviar"/></label><br>
    <h2>Contactos</h2>
    <?php 

    /**
     * @author Daniel Maestre Hermoso
     * Fecha Inicio: 13/10/2021
     * Fecha Fin: 22/10/2020
     * Curso: 2º FP DAW Presencial
     * Módulo: DWES
     * Práctica: Agenda sin cookies, sesiones ni bases de datos
     * @version: 1.0
     */


        // Se comprueba si la agenda ya existe
        if (isset($_GET['agenda']))
            $agenda = unserialize($_GET['agenda']);
        else
            $agenda = []; // Cuando no exista, la agenda se generará vacía
            echo "<label type=hidden for='agenda'></label><input type=hidden id='agenda' name='agenda' value=".serialize($agenda).">";
            // Se introducirán los datos de la agenda como campos ocultos

        if (isset($_GET['submit'])) {
            // Recoge los input del formulario y muestra un aviso si el nombre está vacío
            $nombre = filter_input(INPUT_GET, 'nombre');
            $telefono = filter_input(INPUT_GET, 'telefono');
            if (empty($_GET['nombre'])) {
                echo "<h3>Es necesario introducir un nombre!</h3><br>";
            } elseif (empty($_GET['telefono'])) {
                unset($agenda[$nombre]); // Borra el contacto al escribir solo su nombre
            } else {
                $agenda[($_GET['nombre'])] = $_GET['telefono'];
            }
        }

        // Cuando la agenda está construida, se empieza a recorrer con tal de introducir todos los datos
        if (is_array($agenda)) {
            foreach ($agenda as $clave => $valor) {
                echo "<label type=hidden for='agenda'></label><input type=hidden id='agenda' name='agenda' value =".serialize($agenda).">";
            }
        }

        if (is_array($agenda)) {
            if (count($agenda) == 0) {
                echo "<p>La agenda no tiene ningún contacto</p>";
            } else {
                // Imprime todos los datos almacenados de la agenda
                foreach ($agenda as $clave => $valor) {
                    echo "<h3> {$clave} - {$valor} </h3>";
                }
            }
        }
    ?>

    </form>
</body>
</html>