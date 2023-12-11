
<div id="login-popup" tabindex="-1"
    class="bg-transparent hidden verflow-y-auto overflow-x-hidden rounded fixed top-0 right-0 left-0  z-50 h-full items-center rounded-lg justify-center flex">
    <div class="relative rounded mr-0 ml-6 mt-6 border w-full max-w-md h-full md:h-auto">
        <div class="relative rounded bg-white shadow">
        <div class="h-16 w-16 pb-8 absolute top-3 left-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
    <svg aria-hidden="true" class="" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <img src="assets/img/devils_palace_logo.png"></img>
    </svg>
    </div>
        <button type="button" class="absolute top-2 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
        <svg aria-hidden="true" class="w-6 h-6" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <img src="assets/img/skull-solid.svg" id="close-login-popup"></img>
    </svg>
    <span class="sr-only">Fermer la popup</span>
        </button>
            <div class="p-5">
                <h3 class="text-2xl mb-0.5 font-medium"></h3>
                <p class="mb-4 text-sm font-normal text-gray-800"></p>
                <div class="text-center">
                    <p class="mb-12 text-2xl font-bold leading-5 text-slate-900">
                        SE CONNECTER
                    </p>
                <form class="w-full" action="login-process.php" method="POST" >
                    <label for="email" class="sr-only focus:ring-orange">Adresse Email</label>
                    <input name="email" type="email" autocomplete="email" required=""
                        class="block w-full rounded-lg border border-gray-300 px-3 py-2 placeholder:text-gray-400"
                        placeholder="Adresse Email" value="">
                    <label for="password" class="sr-only">Mot de passe</label>
                    <input name="password" type="password" autocomplete="current-password" required=""
                        class="mt-2 block w-full rounded-lg border border-gray-300 px-3 py-2 placeholder:text-gray-400"
                        placeholder="Mot de passe" value="">
                        <p class="mb-3 mt-2 text-sm text-gray-500">
                        <a href="#" id="open-forgot-password-popup" class="text-red-700 hover:text-gray-950">Un souci de connexion ?</a>
                        </p>
                    <button type="submit"
                            class="inline-flex w-1/2 items-center justify-center rounded-lg bg-black p-2 px-3 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                            Continuez
                    </button>
                    <p class="mb-3 mt-2 text-sm text-gray-500"> Nouveau sur Devil's Palace ? <div class="text-red-700 hover:text-gray-950"> <a href="#" id="switch-to-register">Inscrivez-vous</a>
                    </p>
                </form>     
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div id="register-popup" tabindex="-1" 
class="bg-transparent hidden overflow-y-auto overflow-x-hidden rounded fixed top-8 right-1 left-0 ml-4 z-50 h-full items-center rounded-lg justify-center flex">
<div class="relative rounded ml-3 mt-3 border w-full max-w-md h-full md:h-auto">
        <div class="relative rounded bg-white shadow">
        <div class="h-16 w-16 pb-8 absolute top-3 left-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
    <svg aria-hidden="true" class="" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <img src="assets/img/devils_palace_logo.png"></img>
    </svg>
        </div>
        <button type="button" class="absolute top-2 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
    <svg  aria-hidden="true" class="w-6 h-6" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <img src="assets/img/skull-solid.svg" id="close-register-popup"></img>
    </svg>
    <span class="sr-only">Fermer la popup</span>
        </button>
            <div class="p-5">
                <h3 class="text-2xl mb-0.5 font-medium"></h3>
                <p class="mb-4 text-sm font-normal text-gray-800"></p>
                <div class="text-center">
                    <p class="mb-12 text-2xl font-bold leading-5 text-slate-900">
                    INSCRIVEZ-MOI
                    </p>
                <form class="w-full" action="register-process.php" method="POST">
                    <label for="email" class="sr-only">Adresse Email</label>
                    <input name="email" type="email" autocomplete="email" required=""
                        class="block w-full rounded-lg border border-gray-300 px-3 py-2 placeholder:text-gray-400"
                        placeholder="Adresse Email" value="">
                        <label for="password" class="sr-only">Mot de passe</label>
                <input name="password" type="password" autocomplete="current-password" required=""
                    class="mt-2 block w-full rounded-lg border border-gray-300 px-3 py-2 placeholder:text-gray-400"
                    placeholder="Mot de passe" value="">
        <button type="submit"
        class="inline-flex w-1/2 items-center justify-center rounded-lg bg-black mt-6 p-2 px-3 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
        INSCRIVEZ-MOI
        </button>
                <p class="mb-3 mt-2 text-sm text-gray-500"> Déjà membre ? 
                    <div class="text-red-700 hover:text-gray-950"></p>
                <p>
                    <a id="switch-to-login" href="#login-popup"> Se Connecter</a>
                </p>
                </div>  
                <p class="mt-4 mb-5 text-xs font-semibold">En cliquant le bouton « J'en profite », vous indiquez avoir lu et accepté les <u>Termes de Services</u> et la <u>Politique de confidentialité</u>.</p>
            </form>     
            </div>
        </div>
</div>
</div>
</div>

<div id="forgot-password-popup" tabindex="-1"
class="bg-transparent hidden overflow-y-auto overflow-x-hidden rounded fixed top-8 right-1 left-0 ml-4 z-50 h-full items-center rounded-lg justify-center flex">
<div class="relative rounded ml-3 mt-3 border w-full max-w-md h-full md:h-auto">
        <div class="relative rounded bg-white shadow">
        <div class="h-16 w-16 pb-8 absolute top-3 left-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
    <svg aria-hidden="true" class="" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <img src="assets/img/devils_palace_logo.png"></img>
    </svg>
        </div>
        <button type="button" class="absolute top-2 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
    <svg  aria-hidden="true" class="w-6 h-6" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <img src="assets/img/skull-solid.svg" id="close-forgot-password-popup"></img>
    </svg>
    <span class="sr-only">Fermer la popup</span>
        </button>
            <div class="p-5">
                <h3 class="text-2xl mb-0.5 font-medium"></h3>
                <p class="mb-4  text-sm font-normal text-gray-800"></p>
                <div class="text-center">
                    <p class="mb-8 ml-10 mt-8 text-2xl font-bold leading-5 text-slate-900">
                    MOT DE PASSE OUBLIÉ ?
                    </p>
                <form class="w-full" action="register-process.php" method="POST">
                    <p>Veuillez saisir l'adresse électronique utilisé lors de votre inscription. Nous vous enverrons un lien qui vous permettra de réinitialiser votre mot de passe.</p>
                    <label for="email" class="sr-only">Adresse électronique</label>
                    <input name="email" type="email" autocomplete="email" required=""
                    class="block w-full rounded-lg border mt-4 border-gray-300 px-3 py-2 placeholder:text-gray-400"
                    placeholder="Adresse Email" value="">
                    <button type="submit"
                    class="inline-flex w-1/2 items-center justify-center rounded-lg bg-black mt-6 p-2 px-3 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                    ENVOYEZ
                </button>
                <p class="mb-3 mt-2 text-sm text-gray-500">
                <a id="back-to-login" href="#login-popup" class="text-red-700 hover:text-gray-950">Revenir à la page de connexion</a>
                </p>
                <p class="mt-4 mb-5 text-xs font-semibold">En cliquant le bouton « J'en profite », vous indiquez avoir lu et accepté les <u>Termes de Services</u> et la <u>Politique de confidentialité</u>.</p>
                </div>  
            </form>     
        </div>
        </div>
</div>
</div>

<div id="profil-popup" tabindex="-1"
    class="bg-transparent hidden verflow-y-auto overflow-x-hidden rounded fixed top-0 right-0 left-0  z-50 h-full items-center rounded-lg justify-center flex">
    <div class="relative rounded mr-0 ml-6 mt-14 border w-full max-w-md h-full md:h-auto">
        <div class="relative rounded bg-white shadow">
        <div class="h-16 w-16 pb-8 absolute top-3 left-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
    <svg aria-hidden="true" class="" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <img src="assets/img/devils_palace_logo.png"></img>
    </svg>
    </div>
        <button type="button" class="absolute top-2 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
        <svg aria-hidden="true" class="w-6 h-6" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <img src="assets/img/skull-solid.svg" id="close-profil-popup"></img>
    </svg>
    <span class="sr-only">Fermer la popup</span>
        </button>
            <div class="p-5">
                <h3 class="text-2xl mb-0.5 font-medium"></h3>
                <p class="mb-4 text-sm font-normal text-gray-800"></p>
                <div class="text-center">
                    <p class="mb-12 text-2xl font-bold leading-5 text-slate-900">
                        MODIFIER LE PROFIL
                    </p>
                <form class="w-full" action="profil-process.php" method="POST" enctype="multipart/form-data">
                    <p class="mb-2 text-sm text-gray-500">Nom d'Utilisateur</p>
                    <label for="username" class="sr-only focus:ring-orange">Nom d'Utilisateur</label>
                    <input type="text" id="username" name="username" value="<?php echo $onlyUsername; ?>" required="" class="block w-full rounded-lg border border-gray-300 px-2 py-1 placeholder:text-gray-400" placeholder="Nom d'Utilisateur" value="">
                        <p class=" mt-4 text-sm text-gray-500">Photo de profil</p>
                        <button id="choose-profile-pic" type="file" name="profile-pic" class="mt-2 relative z-2 border-2 px-1 py-1 text-sm font-medium border-black uppercase transition text-white bg-gray-950 hover-bg-opacity-5 focus:outline-none focus:ring-0">
                        Ajouter une photo de profil
                        </button>
                        <input type="file" id="profile-pic-input" name="profile-pic" class="hidden">
                        <br>
                        <p class="mt-4 text-sm text-gray-500">Photo de couverture</p>
                        <button
                    class="mt-2 mb-4 relative z-2 border-2 px-1 py-1 text-sm font-medium border-black uppercase transition text-white bg-gray-950 hover-bg-opacity-5 focus:outline-none focus:ring-0 "
                    type="submit"
                    id="button-addon3"
                    data-te-ripple-init>
                    Ajouter une photo de couverture
                        </button>
                    
                    <button type="reset"
                            class="float-left inline-flex w-1/2 mt-5 items-center justify-center bg-blue-700 p-2 px-1 py-1 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                            Modification Terminée 
                    </button>
                    <button type=""
                            class=" float-right mt-5 inline-flex w-1/3 items-center justify-center bg-gray-500 p-2 py-1 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                            ANNULER
                    </button>
                </form>     
            </div>
        </div>
    </div>
</div>
</div>
