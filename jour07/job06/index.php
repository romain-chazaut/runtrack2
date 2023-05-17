<?php
function leetSpeak($str) {
    $leetChars = array(
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7',
        'a' => '4',
        'b' => '8',
        'e' => '3',
        'g' => '6',
        'l' => '1',
        's' => '5',
        't' => '7'
    );

    $result = '';
    $i = 0;
    
    // Parcours de chaque caractère de la chaîne
    while (isset($str[$i])) {
        $char = $str[$i];

        if (array_key_exists($char, $leetChars)) {
            $result .= $leetChars[$char];
        } else {
            $result .= $char;
        }
        
        $i++;
    }
    
    return $result;
}

// Exemple d'utilisation
$input = "Hello, World!";
$output = leetSpeak($input);
echo $output;  // Affiche "H3110, W0r1d!"


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