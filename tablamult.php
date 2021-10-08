<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Las tablas de multiplicar</title>
    </head>
    <body>
        <style>
            body {
                font-size: larger;
            }
            
            h1 {
                text-align: center;
                padding: 3px;
            }
            
            table {
                border: solid 1px black;
                background-color: antiquewhite;
                width: 90%;
                align-content: center;
            }
            
            table td {
                border: solid 1px black;
                text-align: center;
                padding: 3px;
            }
            
            tr#principal {
                border: solid 1px black;
                background-color: #ff6633;
                text-align: center;
                font-weight: bold;
                padding: 3px;
            }
            
        </style>
        <?php
        echo "<h1>¡Vamos a aprender las tablas de multiplicar!</h1>";
        echo "<table>";
        echo "<tr id='principal'> ";
        for ($x = 1; $x <= 10; $x++) {
            echo "<td> Tabla del $x";
        }
        for ($x = 1; $x <= 10; $x++) {
            echo "<tr> ";
            echo "<td> ";
            for ($y = 1; $y <= 10; $y++) {
                $result = $x*$y;
                if ($y > 1) {
                    echo "<td>";
                }
                echo "$y * $x = $result"; // Con este orden aparece cada tabla de mult en vertical
            }
        } echo "</table>";
        ?>
        
        <br><a href="../ejerciciosclase">Volver al índice</a>
    </body>
</html>
