<?php

require_once 'classes/Utils.php';
require_once 'classes/AppError.php';
require_once 'classes/DataBase.php';
require_once 'classes/UserRegistration.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Utils::redirect('index.php');
}

try {

    $db = new Database();
    $pdo = $db->getConnection();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRegistration = new UserRegistration($pdo);
    $userRegistration->registerUser($email, $password);
    
    Utils::redirect('index.php');
} catch (PDOException $e) {
    Utils::redirect('index.php?error=' . AppError::DB_CONNECTION);
}