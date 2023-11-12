<?php
class HorrorMovieDatabase
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * récupere une liste des films de genre Horror depuis la bdd et les détails des films, pour chaque ligne un objet HorrorMovie estt créer et initialisé 
     */
    public function getHorrorMovies()
    {
        $genre = 'Horror';
        $query = "SELECT hm.movies_name, hm.date_of_release, hm.cover, hm.synopsis, d.director_id, d.director_name, hm.movies_id
        FROM horror_movies hm
        INNER JOIN movies_horror_genre mhg ON hm.id_movies_horror_genre = mhg.movies_genre_id
        LEFT JOIN director d ON hm.id_director = d.director_id
        WHERE mhg.movies_genre_name = :genre";

        $connectStmt = $this->pdo->prepare($query);
        $connectStmt->bindParam(':genre', $genre);
        $connectStmt->execute();

        $movies = [];

        if ($connectStmt->rowCount() > 0) {
            while ($row = $connectStmt->fetch()) {
                $movie = new HorrorMovie();
                $movie->name = $row['movies_name'];
                $movie->date = $row['date_of_release'];
                $movie->cover = $row['cover'];
                $movie->synopsis = $row['synopsis'];
                $movie->directorId = $row['director_id'];
                $movie->directorName = $row['director_name'];
                $movie->movieId = $row['movies_id'];
                $movies[] = $movie;
            }
        }
        return $movies;
    }
}