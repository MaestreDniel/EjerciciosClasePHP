<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    
    <?php
        function factorial($num) {
            if ($num > 1) {
                return $num * factorial($num-1);
            } else if ($num == 1) {
                return 1;
            } else {
                echo "<h3>Introduce un numero mayor que 0</h3>";
            }
        }
        /* $numero = filter_input(INPUT_GET, 'num');
        echo "<label>Introduce número:<input type='number' name='num'/></label><br>";
        echo "<input type='submit' name='submit' value='Enviar'/></label><br>"; */

        // echo "<h2>El factorial de $numero es " . factorial($numero) . "</h2>";
        echo "<h2>El factorial de 5 es " . factorial(5) . "</h2>"
        
    ?>

    </form>
    <br><a href="./">Volver al índice</a>
</body>
</html>