<?php

session_start();

if(isset($_SESSION['nbvisites'])) {
    if(isset($_POST['reset'])) {
        $_SESSION['nbvisites'] = 0;
    } else {
        $_SESSION['nbvisites']++;
    }
} else {
    $_SESSION['nbvisites'] = 1;
}

echo "Le nombre de visites est : ".$_SESSION['nbvisites'];
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

<form method="POST">
    <input type="hidden" name="reset" value="True">
    <input type="submit" value="reset">
</form>
    
</body>
</html>