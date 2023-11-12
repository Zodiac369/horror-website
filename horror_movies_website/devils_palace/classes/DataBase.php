<?php

class Database {
    private $pdo;
    
    public function __construct() {
        $this->pdo = new PDO("mysql:host=host.docker.internal;dbname=devils_palace", "zodiac", "MQ90yxlroyAkt5sa");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * Connexion à la bdd via la méthode public getConnection afin d'obtenier l'objet pdo
     */
    public function getConnection() {
        return $this->pdo;
    }
}