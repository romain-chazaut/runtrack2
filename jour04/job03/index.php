<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom"><br>
		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom"><br>
		<label for="age">Âge :</label>
		<input type="text" name="age" id="age"><br>
		<input type="submit" value="Envoyer">
	</form>
<?php
// Initialiser le compteur à zéro
$count = 0;
// Parcourir tous les éléments de la variable $_GET
foreach ($_POST as $key => $value) {
    // Incrémenter le compteur pour chaque élément
    $count++;
}
// Afficher le résultat
echo "Le nombre d'arguments POST envoyé est : " . $count;
?>

</body>
</html>