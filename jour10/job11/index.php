<?php
// Informations de connexion à la base de données
$host = 'localhost'; // ou l'adresse IP du serveur MySQL
$dbname = 'jour09';
$username = 'root';
$password = 'Romain-1964';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Requête SQL pour sélectionner la capacité moyenne des salles
    $query = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si des résultats ont été obtenus
    if ($result) {
        // Créer le tableau HTML pour afficher les résultats
        echo "<table>";
        echo "<thead><tr>";
        foreach ($result as $key => $value) {
            echo "<th>$key</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        echo "<tr>";
        foreach ($result as $value) {
            echo "<td>$value</td>";
        }
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
