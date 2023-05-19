<?php
// Informations de connexion à la base de données
$host = 'localhost'; // ou l'adresse IP du serveur MySQL
$dbname = 'jour09';
$username = 'root';
$password = 'Romain-1964';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Requête SQL pour récupérer les informations des étudiants dont le prénom commence par "T"
    $query = "SELECT * FROM étudiants WHERE prenom LIKE 'T%'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier si des résultats ont été obtenus
    if (count($result) > 0) {
        // Créer le tableau HTML pour afficher les résultats
        echo "<table>";
        echo "<thead><tr>";
        foreach ($result[0] as $key => $value) {
            echo "<th>$key</th>";
        }
        echo "</tr></thead>";
        echo "<tbody>";
        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
