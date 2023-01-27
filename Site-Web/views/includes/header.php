<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!------------IconDansLaBarNav------------->
    <link rel="shortcut icon" href="./assets/img/settings/icons-settings/icon.png" type="image/x-icon">
    <!----------FinDeL'IconDansLaBarNav----------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/pageJeux.min.css">
    <link rel="stylesheet" href="assets/css/conneAnimate.min.css">
    <link rel="stylesheet" href="assets/css/miniCard.min.css">
    <link rel="stylesheet" href="assets/css/Nav-Foot.min.css">
    <link rel="stylesheet" href="assets/css/mobile.min.css">
    <link rel="stylesheet" href="assets/css/compteUtilisateur.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>site-Web</title>
</head>

<body>
    <!--------------------VoletBuger----------------------->
    <div id="burgerBar" class="voletBurger">
        <div id="boiteBouton">
            <a id="logoBurger" href="./index.php">
                <?php
                require_once('./views/includes/cooneAnimate.php');
                ?>
            </a>
            <p id="titleMarque"></p>

            <a class="boutonVolet" href="./compteUtilisateur.php">
                <p>Mon Compte</p>
            </a>
            <a class="boutonVolet" href="./pageJeux.php">
                <p>Page du jeu</p>
            </a>
        </div>
        <div id="compteUser">
            <p id="titleMarque">Mon Compte</p>
            <input class="inputUser" type="mail" placeholder="e-mail">
            <input class="inputUser" type="password" placeholder="mot de passe">
            <a class="boutonVolet" href="./formulaire.php">
                <p>Connexion</p>
            </a>
            <a class="boutonVolet marginBurger" href="./register.php">
                <p>Inscription</p>
            </a>
        </div>
    </div>
    <!--------------------VoletBuger----------------------->
    <!-----------------------NavBar------------------------->
    <nav id="navBar">
        <div id="boiteConex2">
            <div id="boiteBurger" class="burgerMenu">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <a  class="boutonBurger" href="./index.php">
                <div class="burgerMenu">
                    <span class="material-symbols-outlined">
                        home
                    </span>
                </div>
                <img id="logo" src="./assets/img/settings/icons-settings/icon.png" alt="logo">
                <h1 class="titleH1">Titre du Site</h1>
            </a>

            <a href="./compteUtilisateur.php">
                <div class="burgerMenu">
                    <span class="material-symbols-outlined">
                        account_circle
                    </span>
                </div>
                
            </a>

            <div class="boxCo">
                <input class="inputUserNav" type="mail" placeholder="  e-mail">
                <a class="boutonNav" href="./compteUtilisateur.php">
                    <p>Connexion</p>
                </a>
                <input class="inputUserNav" type="password" placeholder="  mot de passe">
                <a class="boutonNav" href="./register.php">
                    <p>Inscription</p>
                </a>
            </div>
        </div>
    </nav>
    <!--------------------FinDeNavBar----------------------->