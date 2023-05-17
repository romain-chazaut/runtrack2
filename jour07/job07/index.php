<?php
if (isset($_POST['str']) && isset($_POST['fonction'])) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];
    
    // Transformation en fonction de l'option choisie
    if ($fonction === 'gras') {
        // Fonction pour mettre en gras les mots commençant par une majuscule
        $str = mettreEnGrasMotsMajuscules($str);
    } elseif ($fonction === 'cesar') {
        // Fonction pour effectuer un décalage César sur la chaîne
        $str = decalageCesar($str, 2); // Vous pouvez changer le décalage ici
    } elseif ($fonction === 'plateforme') {
        // Fonction pour ajouter un "_" aux mots finissant par "me"
        $str = ajouterUnderscoreAuxMotsFinissantParMe($str);
    }
    
    // Affichage de la chaîne transformée
    echo "Résultat : " . $str;
}

function mettreEnGrasMotsMajuscules($str) {
    // Utilisez ici la logique pour mettre en gras les mots commençant par une majuscule
    // et retournez la chaîne transformée
    return $str;
}

function decalageCesar($str, $decalage) {
    // Utilisez ici la logique pour effectuer un décalage César sur la chaîne
    // en utilisant le décalage spécifié et retournez la chaîne transformée
    return $str;
}

function ajouterUnderscoreAuxMotsFinissantParMe($str) {
    // Utilisez ici la logique pour ajouter un "_" aux mots finissant par "me"
    // et retournez la chaîne transformée
    return $str;
}

?>











<!DOCTYPE html>
<html>
<head>
    <title>Transformation de chaîne de caractères</title>
</head>
<body>
    <form method="post">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required><br><br>
        
        <label for="fonction">Choix de transformation :</label>
        <select id="fonction" name="fonction">
            <option value="gras">Mots en gras</option>
            <option value="cesar">Décalage César</option>
            <option value="plateforme">Mots en plateforme</option>
        </select><br><br>
        
        <input type="submit" value="Valider">
    </form>
</body>
</html>
