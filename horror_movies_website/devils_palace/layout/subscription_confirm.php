<div id="subscription-popup" tabindex="-1"
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