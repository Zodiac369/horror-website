<?php
require_once 'classes/DataBase.php';
require_once 'classes/Movie.php';  
require_once 'classes/MovieDatabase.php';  

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $movieId = $_GET['id'];
    $movieDatabase = new MovieDatabase($pdo);
    $movie = $movieDatabase->getMovieById($movieId);

    if (!$movieId) {
        echo "ID du film non spécifié.";
        exit;
    }

    if (!$movie) {
        echo "Film non trouvé.";
        exit;
    }

    echo '<ul class="list-disc">';
    require 'template/movie-template.php';
    echo '</ul>';

} catch (PDOException $e) {
    exit("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
