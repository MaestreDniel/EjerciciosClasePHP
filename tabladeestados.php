<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estados de una variable</title>
</head>
<body>
    <style>
        body {
            font-size: larger;
        }
        
        table {
            border: solid 1px black;
            background-color: lightgray;
            width: 60%;
            border-collapse: collapse;
        }

        table td, th {
            border: solid 1px black;
            text-align: center;
            padding: 3px;
        }
    </style>

    <?php 

        define('COLUMNAS', 4);
        global $var;

        $contenido_var = array(null, 0, true, false, "0", "", "foo", array(), $var);
        unset($var);
        $info_tabla = array('$var = null;', '$var = 0;', '$var = true;', '$var = false;',
        '$var = 0;', '$var = "";', '$var = foo;', '$var = array();', 'unset ($var);');
        $infooo_tabla = array('Contenido de $var', 'isset($var)', 'empty($var)', '(bool) $var');

        echo "<table>"; "<tr>"; // Abre tabla y fila aquí

        for ($i=0; $i < COLUMNAS; $i++) { 
            echo "<th>$infooo_tabla[$i]</th>"; // Fila tipo header
        }

        echo "</tr>"; // Cierra primera fila aquí

        for ($i = 0; $i < count($contenido_var); $i++) {
            // Rellena toda la tabla y para cada casilla se determina si es true o false
            echo "<tr><th>$info_tabla[$i]</th>";
            echo "<td>".(isset($contenido_var[$i]) ? "true" : "false")."</td>";
            echo "<td>".(empty($contenido_var[$i]) ? "true" : "false")."</td>";
            echo "<td>".((bool)($contenido_var[$i]) ? "true" : "false")."</td>";
        }

        echo "</tr>"; "</table>"; // Cierra última fila y tabla

    ?>
</body>
</html>