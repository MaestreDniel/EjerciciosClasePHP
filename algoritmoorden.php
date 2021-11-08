<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos de ordenación</title>
    <style>
        body {
            background-color: #EEEEEE;
        }

        h1 {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>El método de la burbuja</h1>
        <?php

        /* Este algoritmo en realidad lo hice hace mucho tiempo, 
        es de cuando empezaba a programar (mis primeros 2 meses) */

            $valores = [4, 6, 2, 12, 15, -4, 3];
            echo "<h2>Esta es la lista desordenada: ", implode(", ", $valores), "</h2>";

            function burbuja($valores) {
                $i = 0;
                $ordenada = FALSE;
                $permutado = FALSE;
                $vuelta = 0;
                while (!$ordenada) {
                    foreach ($valores as $valor) {
                        $anterior = $valores[$i];
                        if ($i < count($valores)-1){
                            if ($valores[$i] > $valores[$i+1]) {
                                $valores[$i] = $valores[$i+1];
                                $valores[$i+1] = $anterior;
                                $permutado = TRUE;
                                echo "Iteración $i, vuelta $vuelta: ", implode(", ", $valores), "<br>";
                            } else {
                                if ($permutado) 
                                    $permutado = FALSE;
                                $i++;
                            }
                        } else {
                            if ($vuelta == count($valores)-1) {
                                $ordenada = TRUE;
                            } else {
                                $i = 0;
                                $vuelta++;
                                $permutado = FALSE;
                            }
                        }
                    }
                }
                echo "<h2>Resultado: ", implode(", ", $valores), "</h2>";
            }
            burbuja($valores);
        ?>
    
    </script>
    <br><a href="./">Volver al índice</a>
</body>
</html>

