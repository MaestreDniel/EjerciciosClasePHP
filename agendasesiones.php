<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
<body>
    <style>
        body {
            background-color: #EEEEEE;
        }

        h1, h2 {
            text-decoration: underline;
        }
    </style>
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
         * Fecha Inicio: 03/11/2021
         * Fecha Fin: xx/11/2021
         * Curso: 2º FP DAW Presencial
         * Módulo: DWES
         * Práctica: Agenda que almacena sus datos mediante sesiones de PHP
         * @version: 1.0
         */

        session_start();
                
        if (empty($_GET['telefono'])) {
            if ($_SESSION) {
                foreach ($_SESSION['agenda'] as $clave => $valor) {
                    if ($clave == $_GET['nombre']) {
                        unset($_SESSION['agenda'][$clave]);
                    } else {
                        echo "<h3>" . $clave . " - " . $valor . "</h3>";
                    }
                }
            }
        } else {
            $_SESSION['agenda'][$_GET['nombre']] = $_GET['telefono'];
            foreach ($_SESSION['agenda'] as $clave => $valor) {
                echo "<h3>" . $clave . " - " . $valor . "</h3>";
            }
        }
        
        /* if ($_SESSION['agenda'] == 0) {
            echo "<p>La agenda no tiene ningún contacto</p>";
            echo "<h2>Instrucciones: </h2>";
            echo "<p>Si el campo del nombre: </p> - Está vacío: se muestra una advertencia.<br>";
            echo "- Su valor no existe en la agenda y el nº tel no está vacío: se añade a la agenda.<br>";
            echo "- Su valor ya existe en la agenda y nº tel no está vacío: se sustituye el nº tel anterior.<br>";
            echo "- Su valor ya existe en la agenda y el nº tel está vacío: se elimina el nombre correspondiente de la agenda.<br>";
        } */

        ?>

    </form>
    <br><a href="./">Volver al índice</a>
</body>
</html>