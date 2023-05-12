<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom"><br>
		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom"><br>
		<label for="age">Âge :</label>
		<input type="text" name="age" id="age"><br>
		<input type="submit" value="Envoyer">
	</form>
<?php
// Vérifier si la variable $_GET existe
if (isset($_GET)) {
    // Début du tableau
    echo "<table>";
    // En-tête du tableau
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    // Parcourir tous les éléments de la variable $_GET
    foreach ($_GET as $key => $value) {
        // Afficher chaque élément dans une ligne du tableau
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    // Fin du tableau
    echo "</table>";
} else {
    echo "Aucun argument GET n'a été envoyé.";
}
?>

</body>
</html>