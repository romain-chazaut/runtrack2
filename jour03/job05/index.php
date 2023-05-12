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
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = array(
  "consonnes" => 0,
  "voyelles" => 0
);

$vowels = "aeiouyAEIOUY";
$consonants = "bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
$i = 0;

while (isset($str[$i])) {
  $char = $str[$i];
  if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
    $is_vowel = false;
    for ($j = 0; isset($vowels[$j]); $j++) {
      if ($char == $vowels[$j]) {
        $is_vowel = true;
        break;
      }
    }
    if ($is_vowel) {
      $dic["voyelles"]++;
    } else {
      $dic["consonnes"]++;
    }
  }
  $i++;
}
?>
echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";


</body>
</html>