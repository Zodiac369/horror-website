<?php require_once __DIR__ . '/Director.php';
class DirectorDatabase
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Récupère les détails d'un réalisateur par son ID
     */
    public function getDirectorById($directorId)
    {
        $query = "SELECT * FROM director WHERE director_id = :directorId";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':directorId', $directorId, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $director = new Director();
            $director->directorId = $row['director_id'];
            $director->directorName = $row['director_name'];
            $director->directorPicture = $row['profile_pic'];
            return $director;
        } else {
            return null;
        }
    }

    // Ajoutez d'autres méthodes au besoin
}

?>
