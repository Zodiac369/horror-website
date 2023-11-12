<?php
require_once 'layout/header-profile.php';
require_once 'layout/popup.php';
require_once 'classes/DataBase.php';
require_once 'classes/HorrorMovie.php';
require_once 'classes/HorrorMovieDatabase.php';

?>

<div class="container mx-auto">
<p class="text-3xl text-center font-bold mt-3 ml-12 mb-12">À L'AFFICHE</p>
    <?php

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $HorrorMovieDatabase = new HorrorMovieDatabase($pdo);
    $horrorMovies = $HorrorMovieDatabase->getHorrorMovies();

    foreach ($horrorMovies as $movie) {
        echo '<ul class="list-disc">';
        require "template/a-l'affiche-movies-template.php";
        echo '</ul>';
    }

    echo '</div>';
} catch (PDOException $e) {
    exit("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
</div>
