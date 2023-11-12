<?php
require_once 'layout/header-profile.php';
require_once 'layout/popup.php';
require_once 'classes/DataBase.php';
require_once 'classes/SFMovie.php';
require_once 'classes/SfMovieDatabase.php';

?>

<div class="container mx-auto">
<p class="text-3xl text-center font-bold mt-3 ml-12 mb-12">SCIENCE FICTION</p>
    <?php

try {
    $db = new Database();
    $pdo = $db->getConnection();

    $SFMovieDatabase = new SfMovieDatabase($pdo);
    $SFMovies = $SFMovieDatabase->getSFMovies();

    foreach ($SFMovies as $movie) {
        echo '<ul class="list-disc">';
        require "template/science-fiction-template.php";
        echo '</ul>';
    }

    echo '</div>';
} catch (PDOException $e) {
    exit("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
</div>
