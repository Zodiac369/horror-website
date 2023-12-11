<?php
require_once 'layout/header-profile.php';
require_once 'layout/popup.php';


if (!isset($_SESSION['userInfos'])) {
    Utils::redirect('index.php');
}

$email = $_SESSION['userInfos']['email'];
$emailParts = explode('@', $email);
$onlyUsername = $emailParts[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
</head>
<body>
<div class="h-full w-full bg-gray-200">
<div class="bg-white shadow-xl pb-8">
    <div class="w-full h-full">
        <img src="https://vojislavd.com/ta-template-demo/assets/img/profile-background.jpg" class="w-full h-full">
    </div>
    <div class="flex items-center space-x-2 mt-2">
        <p class="ml-72 text-2xl"><?php echo $onlyUsername; ?></p>
        <div>
        <img id="ouvrir-profil-popup" src="assets/img/pen-nib-solid.svg" alt="Pen Icon" class="cursor-pointer ml-8 mt-1 w-5 h-5">
        </div>
    </div>
    <div class="border-white flex flex-col -mt-24">
    </div>
    <img src="<?php echo $_SESSION['userInfos']['profile_photo']; ?>" alt="Photo de profil" class="w-40 h-40 ml-24 border-4 border-white profile-photo">
</div>
    </div>
</body>
</html>