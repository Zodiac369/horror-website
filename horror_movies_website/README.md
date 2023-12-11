# Projet PHP - Aydogan Emre 
## Horror-Website - Devil's Palace 
Comme nous l'avons vu en cours, création de plusieurs dossiers afin d'organiser son code. 

# I - Connexion et Inscription 
**popup.php** : 3 forms gérés par JS pour éviter la redirection et assuré une fuidité pour l'utilisateur.

**login-popup** : un form afin de se connecter avec la method POST afin de ne pas avoir les champs rentrés par l'utilisateur, la cible de l'action est **login-process.php**, permettant de se connecter à son compte dans la BDD, compte situé dans la table users.<br>
Tout d'abord j'ai créer la classe **DataBase.php** je l'ai déclarée en private car elle est ma connexion à ma BDD elle est uniquement accessible à l'intérieur de ma classe.<br>
Utilsation d'un construteur de classe, création d'une instance pdo et configure les exceptions en cas d'erreur.<br>
Pour finir la classe **DataBase** encapsule la gestion de connexion fournissant la méthode **getConnection**.

## login-process.php 
la classe **UserHandler.php**, cette classe est utilisé pour les opérations lié aux utilisateurs.<br>
l'objet pdo est stocké en private, représentant la connexion à la BDD, cette propriété est initialisée dans le constructeur et sera utilisée pour exécuter des requêtes SQL liées aux utilisateurs.<br>
utilisation d'un constructeur de classe, il prend en argument $pdo. (représentant la connexion a ma BDD), paramètre permettant d'initialiser la propriété $pdo de la classe.

Public function **getUserByEmail($email)**. <br>
méthode permettant de chercher un utilisateur dans la BDD via son email, la méthode est une requete SQL qui recherche l'email spécifié.<br>

Public function **getUserByPassword($password)**. <br>
méthode permettant de vérifier si le bon mdp correspond au hachage stocké dans la BDD, elle prend en parametre le mdp brut et hachage stocké en bdd.<br>
la méthode utilise la fonction **password_verify** pour comparer, elle renvoie true ou false.<br>

Cette classe encapsule la gestion des utilisateurs en fournissant une méthode de recherche d'email et vérifie le mot de passe

## register-process.php 
la classe **UserRegistration.php**, cette classe est utilisé pour gérer l'inscription des utilisateurs, comme pour **login-register.php** l'initialision de la propriété $pdo pour que l'instance UserRegistration puisse accéder a la connexion BDD, en suite la public function registerUser prend en paramètre l'email et l'utilisateur et le mdp en brut, la fonction password_hash pour hasher le mdp.<br>
En suite elle construit une requete SQL (INSERT INTO) incluant l'email et mdp hashé dans la table users.<br>

Cette classe encapsule l'inscription des utilisateurs en fournissant une méthode **registerUser**.

## home.php
session_start() nous fournira donc l'acceès à home.php une fois identifié sur index.php, nous accédons aux nouvelles fonctionnalités du site comme le catalogue. 
# a-l'affiche.php / science-fiction.php / thriller.php / all-movies.php
classe **HorrorMovie.php** : 
déclaration de plusieurs propriétés de la classe : de $name à $movieId, les informations détaillés des films<br>
classe **HorrorMovieDatabase.php** : 
Cette classe a pour but de récupérer les informations sur les films de genre Horror et gère l'acces a la BDD.<br>
public function **getHorrorMovies()** méthode plublic utilisé pour récupérer une liste des films Horror depuis la bdd elle ne prend aucun paramètre. dans cette méthode il y a la requete SQL pour sélectionner les films et les détails de ces derniers. Les résultats de la requete sont lus, et pour chaque ligne
de résultat un nouvel objet HorrorMovie est créé et
initialisé avec les données de la BDD.<br>
Les objets HorrorMovie sont stockés dans un tableau $movies, ce tableau là est retourné en tant que résultat de la méthode.<br>
plus qu'a try catch tout ça, j'utilise ma classe
**DataBase.php** pour la connexion a la bdd l'objet
DataBase.<br> Création de l'instance de classe
**HorrorMovieDatabase** afin d'utiliser les méthodes
pour récuperer mes films avec en parametre $pdo.<br> appelle de la méthode **getHorrorMovies()** de l'objet **$HorrorMovieDatabase** pour récupérer une liste de films d'horreur et ces films sont stockés dans le tableau $horrorMovies.
Je parcours chqaue élément du tableau **$horroMovies** avec une boucle foreach, elle m'affichera une liste html, utilisation de require afin d'inclure le fichier pour chaque film d'horreur et il me servira d'afficher les détails de chaque films.<br>Pour finir le cas d'erreur une exception pdo est attrapé en affichant le message d'erreur concernant la connexion a la BDD.<br>

J'ai par la suite utilisé ces deux classes de bases modulables afin de pouvoir géré les template SF et Thriller. grace à leur classes respectivent. : "**'genre'Movie.php**" et "**'genre'MovieDatabases.php**"
# a-l'affiche-movies-template.php / science-fiction-template.php / thriller-template.php
## Template pour les films à l'affiche (ceux de genre Horror) 
**$coverCode = $movie->cover;**  extrait le code de la couverture du film **($cover)** de l'objet **$movie** et le stocke dans la variable $coverCode.<br>
**$coverURL = "https://image.tmdb.org/t/p/w500/" . $coverCode;** cela crée l'url de la couverture du film en concaténant le code de la couverture avec l'url de base, cela permet d'afficher la couverture du film.<br>
**a href="film.php?<?= $movie->name ?>** pointe vers la page "film.php" avec le nom du film comme paramètre, permettant aux utilisateurs de cliquer sur l'image pour accéder à la page du film.<br> 
**La meme chose est répété pour l'année, le réalisateur et le synopsis** 

## profil.php 
Impossible d'accéder à cette page sans avoir créer un compte si une session n'a pas été initisalité, elle renverra directement à index.php la redirection se fait avec la classe Utils (merci Lucas j'ai du la garder celle-là très utile comme classe 🤡).<br>
En suite je récupère l'email a partir de $_SESSION qui est stockée dans cette variable super globale.<br>
Pour l'étsteique j'ai utilsé la fonction explode pour diviser l'email en 2 parties en utilsant @ comme diviseur, elle me retourne un tableau contenant les 2 parties du résultat. **$emailParts[0]** sera la partie qui m'interessera, celle sans le domaine. Avec **$OnlyUsername = $emailParts[0]** je stocke la 1ere partie.<br>
Pour l'affiche j'echo ma variable **$OnlyUsername** pour afficher le nom d'utiilsateur par défaut sur mon site. 
## logout.php 
detroy de la session, redirige l'utilisateur à index.php avec la classe Utils.   

## probème de classes. 
Il est Samedi après-midi à l'heure où j'écris ça, j'ai passé la moitié de la nuit à me prednre la tete avec toutes ces classes, je me suis bien emmelé les pinceaux, j'ai réussis à faire fonctionner tout ça mais pas comme j'aurais aimé, je parle de la classe Movie.php et MoviesDatabase.php ainsi que les deux classes AllMovie.php et AllMoviesDatabase, mon gros problème était d'appelé toutes les instances de classe correctement, j'ai déclaré le $director à deux endroits différents, je voulais séparés au mieux tout ça mais j'ai eu énormément de mal à me retrouver au final, la classe Director et DirectorDatabase m'ont servis au final pour faire une page unique dans director.php avec director-template.php mais le soucis et tu l'auras peut-etre vu est dans ma classe MovieDatabase où j'instancie aussi le director avec l'objet Movie... j'ai laissé comme c'était car celà fonctionne mais je ne suis pas content du résultat. J'ai essayé de trouver des solutions mais je perdais trop de temps, je pense qu'il fallait juste revoir l'arboresance de tout ça, mais j'aimerias avancer et ajouter d'autres fonctionnalité vu que ça marche. 
 
## Notes. 
C'était vraiment compliqué de faire un README, j'ai fais beaucoup de choses dans la volée pour ajouter des foncitonnlaités et meme reglé des erreurs/détails, je ne sais plus par quoi commenencer. 
Je suis vraiment content que tout marche. <br>
Il est dimanche après-midi, j'aimerais continuer sur la profile.php, j'ai ajouter un popup lorsque l'on clique sur svg afin de pouvoir modifier son profil, comme le Username qui ira dans la table users, colonne usernae_users ainsi que a photo de profil, j'aurais aimé la photo de couverture qui restera optionnel.<br>
J'aurais aimé rajouter bien plus de fonctionnalité, comme ajouter des films a sa liste ainsi que povoir ajouter des reviews, j'ai commencé le back assez tard dans le projet et je manque de temps, excuse-moi pour ça, merci pour la bdd Lucas, elle va m'etre très utile dans le futur.<br>
A bientot ! 

