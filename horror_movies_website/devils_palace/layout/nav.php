<header>
<!-- Navigation bar -->
<nav
class="relative flex w-full items-center justify-between bg-white text-neutral-950 shadow-lg hover:text-neutral-900 focus:text-neutral-700 dark:text-white-600 md:flex-wrap md:justify-start"
data-te-navbar-ref>
<div class="flex w-full flex-wrap items-center justify-between ">
    <a href="index.php">
        <div class="Logo">
            <source srcset="assets/img/devils_palace_logo.png">
            <img src="assets/img/devils_palace_logo.png"  alt="Logo Devil's Place" class="img-fluid ml-12" width="100" height="90">
        </div>
        
    </a>
    
    
<!-- Navigation links -->
<div
class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
id="navbarSupportedContentX"
data-te-collapse-item>
<div class="relative">
  <input
    class="ml-12 mb-2 pl-10 transition-colors w-2/3 text-gray-800 leading-tight focus:outline-none focus:ring-gray-950 border-none"
    id="username"
    type="text"
    placeholder="Recherche"
  />

  <div class="absolute right-0 inset-y-0 flex items-center">
    <svg
      id="search-icon"
      xmlns="http://www.w3.org/2000/svg"
      class="-ml-1 mr-16 mb-1 h-4 w-5 text-gray-600 hover:text-gray-800 cursor-pointer"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M6 18L18 6M6 6l12 12"
      />
    </svg>
  </div>

  <div class="absolute left-0 inset-y-0 flex items-center">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-6 w-6 mb-2 ml-14 text-gray-400 hover:text-gray-500 cursor-pointer"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
      />
    </svg>
  </div>
</div>

<ul
class="mr-auto flex flex-col lg:flex-row"
data-te-navbar-nav-ref>

<div class="block transition duration-150 ease-in-out hover:text-neutral-700 font-semibold focus:text-neutral-700 disabled:text-black/30 dark:hover:text-neutral-900 dark:focus:text-neutral mt-2 ml-12 mr-4" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
    
    <!-- <svg class="w-[17px] h-[20px] ml-8 text-gray-800 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8" id="dropdown-toggle">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
    </svg> -->
</div>

<!-- <ul class="absolute z-[1000] float-left pt-2 mt-1 pr-3 pl-3 ml-8 hidden min-w-max list-none overflow-hidden rounded-lg bg-red-300 bg-clip-padding text-left text-base text-slate-950 border shadow-lg" id="dropdown-menu" style="top: 70px;">
        <a href="a-l'affiche.php">À l'Affiche</a>
    </li>
    <li>
        <a href="science-fiction.php">Science-Fiction</a>
    </li>
    <li>
        <a href="thriller.php">Thriller</a>
    </li>
</ul>  -->
    <li class="mb-4 lg:mb-0 mr-4 ml-4 lg:pr-2" data-te-nav-item-ref>
        <a
        class="block transition duration-150 ease-in-out font-semibold disabled:text-black/30 dark:hover:text-neutral-950 lg:p-2 [&.active]:text-black/90"
        href="#!"
        data-te-nav-link-ref
        data-te-ripple-init
        data-te-ripple-color="light"
        >À PROPOS</a>
    </li>
    <!-- <li class="mb-2 mr-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
        <a
        class="block transition duration-150 ease-in-out font-semibold hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-neutral-950 dark:focus:text-white lg:p-2 [&.active]:text-black/90"
        href="#!"
        data-te-nav-link-ref
        data-te-ripple-init
        data-te-ripple-color="light"
        >MA LISTE</a>
    </li> -->
    <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
        <a
        class="block transition duration-150 font-semibold ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-neutral-950 dark:focus:text-white lg:p-2 [&.active]:text-black/90"
        href="#!"
        data-te-nav-link-ref
        data-te-ripple-init
        
        data-te-ripple-color="light"
        >CONTACT</a>
    </li>
    <li class="mt-1.5 ml-10 lg:mb-0 text-xl font-bold" data-te-nav-item-ref>
    <button id="ouvrir-registre" class="text-bouton-connexion">CONNEXION</button>
    </li>
</ul>




<div>
<a href="https://github.com/Zodiac369" target="_blank">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 mr-8 w-8 mb-4" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
    </svg>
</a>

</div>
<a href="https://www.linkedin.com/in/emre-a-2711b6273/" target="_blank">
<svg
  xmlns="http://www.w3.org/2000/svg"
  class="h-7 w-7 mr-10 mb-4"
  fill="currentColor"
  viewBox="0 0 24 24">
  <path
    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
</svg> 
</a>

</nav>
</header>

<!-- Hero section with background image, heading, subheading and button -->





