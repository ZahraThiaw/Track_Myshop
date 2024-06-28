<?php
require_once '../data/data.php';

try {
    // Vérification de la connexion à la base de données
    $db = Database::getInstance()->getConnection();
    echo "Connexion réussie à la base de données PostgreSQL.<br>";

    // Exemple de requête SELECT
    $query = $db->query("SELECT * FROM Paiement");
    
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
        echo "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
