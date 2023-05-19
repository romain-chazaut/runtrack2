<?php
// Informations de connexion à la base de données
$host = 'localhost'; // ou l'adresse IP du serveur MySQL
$dbname = 'jour09';
$username = 'root';
$password = 'Romain-1964';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Requête SQL pour récupérer le nombre total d'étudiants dans la colonne "nb_etudiants"
    $query = "SELECT COUNT(*) AS nb_etudiants FROM étudiants";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si un résultat a été obtenu
    if ($result) {
        // Créer le tableau HTML pour afficher le résultat
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>nb_etudiants</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>{$result['nb_etudiants']}</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
