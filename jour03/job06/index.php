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
$str = "Les choses que l'on possède finissent par nous posséder.";
$i = 0;

// Trouver la longueur de la chaîne
while (isset($str[$i])) {
  $i++;
}

// Parcourir la chaîne à l'envers et l'écrire dans l'ordre inverse
for ($j = $i - 1; $j >= 0; $j--) {
  echo $str[$j];
}
?>
</body>
</html>