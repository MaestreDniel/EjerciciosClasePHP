<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function divisors($integer) {
  $divisor = [];
  for ($x = 2; $x < $integer; $x++) {
    if ($integer % $x == 0) {
      array_push($divisor, $x);
    }
  }
  if (count($divisor) == 0) {
    echo "$integer es primo";
    return "$integer es primo";
  }
  echo "<p>Prueba -> $integer es divisible por estos números:", implode(", ", $divisor), "</p>";
  return $divisor;
}

divisors(12);
divisors(15);
divisors(13);

?>
</body>
</html>

