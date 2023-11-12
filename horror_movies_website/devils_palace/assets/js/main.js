//OUVERTURE POP-UP DEPUIS CONNEXION
document.addEventListener("DOMContentLoaded", function() {
    const boutonOuvrirRegistre = document.getElementById('ouvrir-registre');
    const popupRegistre = document.getElementById('login-popup');
    // const boutonFermer = popupRegistre.querySelector('.popup-close');
    
    boutonOuvrirRegistre.addEventListener('click', function() {
        popupRegistre.classList.remove('hidden');
    });

});


// SWITCH LOGIN TO REGISTER ET FERMETURE SUR LE SVG 
document.addEventListener("DOMContentLoaded", function() {
    const loginPopup = document.getElementById("login-popup");
    const registerPopup = document.getElementById("register-popup");
    const forgotPasswordPopup = document.getElementById("forgot-password-popup");
    const popupProfil = document.getElementById('profil-popup');

    const openForgotPasswordLink = document.getElementById("open-forgot-password-popup");
    const boutonFermerLogin = document.getElementById('close-login-popup');
    const boutonFermerRegister = document.getElementById('close-register-popup');
    const boutonFermerForgotPassword = document.getElementById('close-forgot-password-popup');
    const boutonFermerProfil = document.getElementById('close-profil-popup');

    const switchToRegisterLink = document.getElementById("switch-to-register");
    const backButtonLink = document.getElementById("back-to-login");
    const switchToLoginLink = document.getElementById("switch-to-login");

    boutonFermerLogin.addEventListener('click', function() {
        loginPopup.classList.add('hidden');
    });

    boutonFermerRegister.addEventListener('click', function() {
        registerPopup.classList.add('hidden');
    });

    boutonFermerForgotPassword.addEventListener('click', function() {
        forgotPasswordPopup.classList.add('hidden');
    });

    boutonFermerProfil.addEventListener('click', function() {
        popupProfil.classList.add('hidden');
    });

    openForgotPasswordLink.addEventListener("click", function(e) {
        e.preventDefault();
        loginPopup.classList.add('hidden');
        registerPopup.classList.add('hidden');
        forgotPasswordPopup.classList.remove("hidden");
    });

    switchToRegisterLink.addEventListener("click", function(e) {
        e.preventDefault();
        loginPopup.classList.add('hidden');
        registerPopup.classList.remove('hidden');
        forgotPasswordPopup.classList.add('hidden');
    });

    backButtonLink.addEventListener("click", function(e) {
        e.preventDefault();
        loginPopup.classList.remove('hidden');
        forgotPasswordPopup.classList.add('hidden');
    });
    
    switchToLoginLink.addEventListener("click", function(e) {
        e.preventDefault();
        loginPopup.classList.remove('hidden');
        registerPopup.classList.add('hidden');
        forgotPasswordPopup.classList.add('hidden');
    });
});


//DROPDOWN MENU DE CATALOGUE
const svg = document.getElementById('dropdown-toggle');
const dropdownMenu = document.getElementById('dropdown-menu');

svg.addEventListener('click', (e) => {
    dropdownMenu.classList.toggle('hidden');
    e.stopPropagation();
});

document.addEventListener('click', (e) => {
    if (e.target !== dropdownMenu && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
    }
});

// DROPDOWN MENU PROFIL 
const svgProfile = document.getElementById('dropdown-toggle-Profile');
const dropdownMenuProfile = document.getElementById('dropdown-menu-Profile');

svgProfile.addEventListener('click', (e) => {
    dropdownMenuProfile.classList.toggle('hidden');
    e.stopPropagation();
});

document.addEventListener('click', (e) => {
    if (e.target !== dropdownMenuProfile && !dropdownMenuProfile.contains(e.target)) {
        dropdownMenuProfile.classList.add('hidden');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    const boutonOuvrirProfilUpdate = document.getElementById('ouvrir-profil-popup');
    const popupProfil = document.getElementById('profil-popup');
    const boutonFermerProfil = document.querySelector('close-profil-popup');
    
    boutonOuvrirProfilUpdate.addEventListener('click', function() {
        popupProfil.classList.remove('hidden');
    });

    boutonFermerProfil.addEventListener('click', function() {
        popupProfil.classList.add('hidden');
    });

});


document.getElementById('choose-profile-pic').addEventListener('click', function () {
    document.getElementById('profile-pic-input').click();
});
