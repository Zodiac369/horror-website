<?php
    
class UserRegistration {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function registerUser($email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (`users_email`, `users_password`) VALUES (:uemail, :uhashedPassword)";

        $stmtInsert = $this->pdo->prepare($query);
        $stmtInsert->execute([
            'uemail'          => $email,
            'uhashedPassword' => $hashedPassword
        ]);
    }
}
