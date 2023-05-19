<?php
// Informations de connexion à la base de données
$host = 'localhost'; // ou l'adresse IP du serveur MySQL
$dbname = 'jour09';
$username = 'root';
$password = 'Romain-1964';

// Connexion à la base de données avec PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Requête SQL pour récupérer toutes les informations de la table "étudiants"
$query = "SELECT * FROM étudiants";
$result = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si des résultats ont été obtenus
if (count($result) > 0) {
    // Créer le tableau HTML pour afficher les résultats
    echo "<table>";
    echo "<tr>";
    foreach ($result[0] as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}
?>
