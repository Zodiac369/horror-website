<?php
require_once 'classes/DataBase.php';
require_once 'classes/DirectorDatabase.php';

try {
    $db = new Database();
    $pdo = $db->getConnection();
    
    $directorId = $_GET['id'];  
    $directorDatabase = new DirectorDatabase($pdo);
    $director = $directorDatabase->getDirectorById($directorId);
    
    if (!$director) {
        echo "Réalisateur non trouvé.";
        exit;
    }

    echo '<ul class="list-disc">';
    require 'template/director-template.php';
    echo '</ul>';

} catch (PDOException $e) {
    exit("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
