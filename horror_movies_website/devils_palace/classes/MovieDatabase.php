<?php require_once __DIR__ . '/Director.php';
class MovieDatabase
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getMovieById($movieId)
    {
        $query = "SELECT hm.movies_id, hm.movies_name, hm.date_of_release, hm.cover, hm.synopsis, d.director_id, d.director_name
        FROM horror_movies hm
        LEFT JOIN director d ON hm.id_director = d.director_id
        WHERE hm.movies_id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $movieId);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            $movie = new Movie();
            $movie->movieId = $row['movies_id'];
            $movie->name = $row['movies_name'];
            $movie->date = $row['date_of_release'];
            $movie->cover = $row['cover'];
            $movie->synopsis = $row['synopsis'];
            $movie->directorId = $row['director_id'];
            $movie->directorName = $row['director_name'];
            
            return $movie;
        } else {
            return null;
        }
    }
}
?>
