<?php

session_start();

require_once 'classes/AppError.php';
require_once 'classes/Utils.php';
require_once 'classes/DataBase.php';
require_once 'classes/UserHandler.php';


if (!isset($_POST['email']) || !isset($_POST['password'])) {
    Utils::redirect('index.php');
}

[
    'email' => $email,
    'password' => $password
] = $_POST;

try {
    $db = new Database();
    $pdo = $db->getConnection();
} catch (PDOException) {
    Utils::redirect('index.php?error=' . AppError::DB_CONNECTION);
}

$userManager = new UserManager($pdo);
$user = $userManager->getUserByEmail($email);

if ($user === false) {
    Utils::redirect('index.php?error=' . AppError::USER_NOT_FOUND);
}

if (!password_verify($password, $user['users_password'])) {
    Utils::redirect('index.php?error=' . AppError::INVALID_CREDENTIALS);
}

$_SESSION['userInfos'] = [
    'id' => $user['id'],
    'email' => $email
];

if (!password_verify($password, $user['users_password'])) {
    Utils::redirect('index.php?error=' . AppError::INVALID_CREDENTIALS);
}

// Récupère l'URL de la photo de profil depuis la base de données
$profilePhotoUrl = $defaultProfilePhotoUrl = 'https://images.mubicdn.net/static/images/avatar.png';

// Utilise l'URL de la photo de profil par défaut si l'URL est vide
if (empty($profilePhotoUrl)) {
    $profilePhotoUrl = $defaultProfilePhotoUrl;
}

// Stocke l'URL de la photo de profil dans la session
$_SESSION['userInfos']['profile_photo'] = $profilePhotoUrl;


Utils::redirect('home.php');



