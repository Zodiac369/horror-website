<?php 
require_once 'layout/header-profile.php'; 
require_once 'classes/Utils.php';
if (!isset($_SESSION['userInfos'])) {
    $_SESSION['loginErrorMessage'] = "Vous devez être identifié pour accéder à cette page";
    Utils::redirect('index.php');
}


?>

<div
    class="relative overflow-hidden bg-cover bg-no-repeat"
    style="background-position: 50%; background-image: url('assets/img/the-texas-chainsaw-massacre-5c8e68a02218e.jpg'); height: 515px;">
    <!-- Votre contenu va ici -->
    <div class="px-6 text-left text-white md:px-12">
    <p class="mt-20 mb-4 pb-12 text-5xl font-bold">UNE NOUVELLE FAÇON D'AVOIR PEUR</p>
        <p class="mb-2 pb-7 text-5xl font-bold">BIENVENUE SUR DEVIL'S PALACE</p>
        <div class="mb-0">
            <div class="relative flex w-full flex-wrap items-stretch">
                <div class="relative flex text-white items-stretch">
                </div>
            </div>
        </div>
    </div>
</div>
<p class="ml-44 mt-4 text-3xl font-semibold">NOUVEAUTÉS SUR DEVILS PALACE</p>

<!-- component -->
<!-- This is an example component -->

<div id="indicators-carousel" class="mt-4 relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-66 overflow-hidden md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="assets/img/exorcist.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="text-white font-bold text-3xl absolute top-24 left-44">L'EXORCISTE</div>
            <div class="text-white font-semibold text-l absolute top-32 left-44 mt-1">
            William Friedkin ÉTATS-UNIS, 1973</div>
            <div class="text-white font text-m absolute top-40 left-44 max-w-md">
            Chris McNeill, actrice de télévision, s'inquiète d'entendre de plus en plus fréquemment des bruits bizarres dans la chambre de sa fillette, Regan. Celle-ci se plaint d'avoir des difficultés à dormir à cause des mouvements spasmodiques qui ébranlent son lit.
            </div>
            <div class="flex">
    <button
        class="relative z-2 px-5 py-2 text-m top-64 left-44 mt-12 font-semibold uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/play-solid.svg" class="w-6 h-6 mr-2" alt="SVG Image">
        LECTURE
    </button>
    
    <button
        class="relative z-2 px-2 py- text-m top-64 left-44 mt-12 ml-8 uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/circle-plus-solid.svg" class="w-6 h-6" alt="SVG Image">
    </button>
</div>
    </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/img/the-ring.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." >
            <div class="text-white font-bold text-3xl absolute top-24 left-44">RING</div>
            <div class="text-white font-semibold text-l absolute top-32 left-44 mt-1">
            Hideo Nakata JAPON, 1998</div>
            <div class="text-white font-medium text-m absolute top-40 left-44 max-w-md">
            Un soir, seules à la maison, deux adolescentes se font peur en se racontant une mauvaise blague. Une étrange rumeur circule à propos d'une cassette vidéo qui, une fois visionnée, déclenche une terrible malédiction: une mort annoncée sept jours plus tard.
            </div>
            <div class="flex">
    <button
        class="relative z-2 px-5 py-2 text-m top-64 left-44 mt-12 font-semibold uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/play-solid.svg" class="w-6 h-6 mr-2" alt="SVG Image">
        LECTURE
    </button>
    
    <button
        class="relative z-2 px-2 py- text-m top-64 left-44 mt-12 ml-8 uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/circle-plus-solid.svg" class="w-6 h-6" alt="SVG Image">
    </button>
</div>
            
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/img/laurie-strode-2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="text-white font-bold text-3xl absolute top-16 left-44">HALLOWEEN, <br>LA NUIT DES MASQUES</div>
            <div class="text-white font-semibold text-l absolute top-32 left-44 mt-2">
            John Carpenter ÉTATS-UNIS, 1978</div>
            <div class="text-white font-medium text-m absolute top-40 left-44 max-w-md mt-2">
            La nuit d'Halloween 1963. Le jeune Michael Myers se précipite dans la chambre de sa soeur aînée et la poignarde sauvagement. Après son geste, Michael se mure dans le silence et est interné dans un asile psychiatrique. Quinze ans plus tard, il s'échappe de l'hôpital et retourne sur les lieux de son crime. Il s'en prend alors aux adolescents de la ville.
            </div>
            <div class="flex">
    <button
        class="relative z-2 px-5 py-2 text-m top-72 left-44 mt-12 font-semibold uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/play-solid.svg" class="w-6 h-6 mr-2" alt="SVG Image">
        LECTURE
    </button>
    
    <button
        class="relative z-2 px-2 py- text-m top-72 left-44 mt-12 ml-8 uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/circle-plus-solid.svg" class="w-6 h-6" alt="SVG Image">
    </button>
</div>
            
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="assets/img/freddy-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="text-white font-bold text-3xl absolute top-16 left-44">LES GRIFFES DE LA NUIT</div>
            <div class="text-white font-semibold text-l absolute top-20 left-44 mt-6">
            Wes Craven ÉTATS-UNIS, 1984</div>
            <div class="text-white font text-m absolute top-32 left-44 max-w-md mb-4">
            Nancy, Kris, Quentin, Jesse et Dean habitent Elm Street, au coeur d'une banlieue résidentielle semblable à des milliers d'autres - paisible, proprette et sans histoire... Mais depuis quelques temps, ces cinq jeunes sont hantés chaque nuit par le même cauchemar oppressant : un homme à la voix caverneuse surgit des ténèbres. Vêtu d'un t-shirt rouge et vert lacéré, il dissimule sous un vieux chapeau son visage atrocement brûlé et défiguré.
            </div>
            <div class="flex">
    <button
        class="relative z-2 px-5 py-2 text-m top-72 left-44 mt-12 font-semibold uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/play-solid.svg" class="w-6 h-6 mr-2" alt="SVG Image">
        LECTURE
    </button>
    
    <button
        class="relative z-2 px-2 py- text-m top-72 left-44 mt-12 ml-8 uppercase transition text-gray-950 bg-white hover:bg-red-600 rounded-full focus:outline-none focus:ring-0 flex items-center"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        <img src="assets/img/circle-plus-solid.svg" class="w-6 h-6" alt="SVG Image">
    </button>
</div>
        </div>
        <!-- Item 5 -->
        <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div> -->
    </div>
    <!-- Slider indicators -->
    <!-- <div class="text-white absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full " aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>

        <!-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button> -->
    <!-- </div> --> 
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-white/30 group-hover:bg-white/60 dark:group-hover:bg-white/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-white-800/30 group-hover:bg-white/50 dark:group-hover:bg-white-800/60 group-focus:ring-4 group-focus:ring-white group-focus:ring-white-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

