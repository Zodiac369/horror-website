<?php
require_once 'layout/header-profile.php';
require_once 'layout/popup.php';
require_once 'classes/DataBase.php';
require_once 'classes/AllMovies.php';
require_once 'classes/AllMoviesDatabase.php';

?>

<div class="container mx-auto">
<p class="text-3xl text-center font-bold mt-3 ml-12 mb-12">TOUS LES FILMS</p>
    <?php

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $AllMovieDatabase = new AllMoviesDatabase($pdo);
    $AllMovies = $AllMovieDatabase->getAllMovies();


    foreach ($AllMovies as $movie) {
        echo '<ul class="list-disc">';
        require "template/all-movies-template.php";
        echo '</ul>';
    }

    echo '</div>';
} catch (PDOException $e) {
    exit("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
</div>
