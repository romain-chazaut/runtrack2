
<?php

function calcul($nbre1, $operation, $nbre2) {
    if ($operation == "+") {
        return $nbre1 + $nbre2;
    } elseif ($operation == "-") {
        return $nbre1 - $nbre2;
    } elseif ($operation == "*") {
        return $nbre1 * $nbre2;
    } elseif ($operation == "/") {
        return $nbre1 / $nbre2;
    } elseif ($operation == "%") {
        return $nbre1 % $nbre2;
    } else {
        throw new Exception("Opération invalide : " . $operation);
    }
}

echo calcul(34, "*", 2);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>