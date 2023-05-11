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
$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = "aeiouyAEIOUY";
$result = "";
$i = 0;

while (isset($str[$i])) {
  $char = $str[$i];
  if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u' || $char == 'y' || $char == 'A' || $char == 'E' || $char == 'I' || $char == 'O' || $char == 'U' || $char == 'Y') {
    $result .= $char;
  }
  $i++;
}
echo $result; 
?>

    
</body>
</html>