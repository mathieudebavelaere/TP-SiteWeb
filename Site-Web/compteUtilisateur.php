<?php
require('./views/includes/headerUserMobile.php')
?>
<div id="containerUser">
    <div id="containerbox">
        <div id="boitecontainer">
            <!--------------------UserBox----------------------->
            <div id="boxUser" class="skinFront1">
                <div id="avatarUser"></div>
                <div id="profilUser">
                    <p class="textUser">TiMateoHDSE</p><img id="psnPlus" src="./assets/img/settings/icons-platForms/playstation/psnplus.png"></img>
                    <div id="boiteBadge">
                        <img id="badgeRecomp" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/platine.png" alt="">
                        <p id="numberTrophée">1</p>
                        <img id="badgeRecomp" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        <p id="numberTrophée">76</p>
                        <img id="badgeRecomp" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        <p id="numberTrophée">123</p>
                        <img id="badgeRecomp" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/bronze.png" alt="">
                        <p id="numberTrophée">348</p>
                    </div>
                </div>
            </div>

            <div id="compteGameUser" class="boxSearch">
                <input id="searchGame" type="search" placeholder="Tapez votre recherche ici : Call Of Duty... ">
                <button class="searchGame"><span class="material-symbols-outlined">
                        search
                    </span></button>
            </div>
        </div>

        <div id="boxHG" class="skinFrontHG1">
            <div id="boiteCompte">
                <div id="psn"></div>
                <p class="titlePsn">TiMateoHDSE</p>
            </div>
            <div id="boiteCompte">
                <div id="xbox"></div>
                <p class="titleXbox">Non Connectée</p>
            </div>
            <div id="boiteCompte">
                <div id="nintendo"></div>
                <p class="titleNintendo">Non Connectée</p>
            </div>
            <div id="boiteCompte">
                <div id="steam"></div>
                <p class="titleSteam">Non Connectée</p>
            </div>

        </div>
    </div>
    <!--------------------UserBox----------------------->
    <div id="parentGame" class="sizeBox">
        <div id="BlocOnglet">

            <div id="onglet1" class="ongletOpen">
                <p class="titleOnglet">Favoris</p>
            </div>
            <div id="onglet2" class="onglet">
                <p class="titleOnglet">Bibliothèque</p>
            </div>
            <div id="onglet3" class="onglet">
                <p class="titleOnglet">Liste d'amis</p>
            </div>
            <div id="onglet4" class="onglet">
                <p class="titleOnglet"> Mon Profil</p>
            </div>

            <div id="boxGame" class="skinFront1">
                <!--------------------ongletOne---------------------------------------------------------------------------->
                <div id="ongletOne" class="visible">

                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/god-of-war-ragnarok.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/call-of-duty-modern-warfare-two.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/nfs-unbound.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/the-callisto-protocole.php') ?>

                </div>
                <!--------------------ongletTwo---------------------------------------------------------------------------->
                <div id="ongletTwo" class="noVisible scroller">

                    <div class="catégorie">
                        <p>Jeux en Cours</p>
                    </div>

                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/god-of-war-ragnarok.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/call-of-duty-modern-warfare-two.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/nfs-unbound.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/the-callisto-protocole.php') ?>



                    <div class="catégorie">
                        <p>Jeux Terminer</p>
                    </div>

                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/god-of-war-ragnarok.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/call-of-duty-modern-warfare-two.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/nfs-unbound.php') ?>
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/the-callisto-protocole.php') ?>
                </div>
            </div>
            <!--------------------ongleThree---------------------------------------------------------------------------->
            <div id="ongletThree" class="noVisible">
                <div id="BoiteFriend">

                    <div id="listFriends" class="scroller">
                        <div id="boiteHorizontal">
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/images-2.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown-1.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown-2.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown-1.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown-2.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown-1.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                            <div id="friends">
                                <img class="imgFriend" src="./assets/img/avatar-user/Unknown-2.jpeg" alt="">
                                <p class="utilisateurFirend">Utilisateur</p>
                            </div>
                            <!--------------->
                        </div>
                    </div>
                    <div id="mainFriends">


                    </div>
                </div>
            </div>
            <!--------------------ongletFour---------------------------------------------------------------------------->
            <div id="ongletFour" class="noVisible">
                <div id="boxReglage">

                    <div id="boiteReglageG">
                        <div id="boiteAvatar">
                            <div class="avatarReglage"></div>
                            <button class="boutonReglage">
                                <p>Changer d'avatar</p>
                            </button>
                        </div>
                        <div id="boiteSkin">
                            <h2 class="titleSkin">Thèmes</h2>
                            <div id="skin1"></div>
                            <div id="skin2"></div>
                        </div>
                    </div>
                    <div id="boiteReglageD">
                        <div class="profilReglage">
                            <h2 class="titleSkin">Modifications</h2>
                            <input id="firstName" required class="box" type="text" placeholder="Nom">
                            <input id="lastName" required class="box" type="text" placeholder="Prénom">
                            <input id="birthDay" required class="box" type="Date" id="Birthday">
                            <input id="eMail" required class="box" type="mail" placeholder="e-mail">
                            <input id="passWord" required class="box" type="password" placeholder="Mot de passe">
                            <input id="confPassWord" required class="box" type="password" placeholder="Confirmation de mot de passe">
                            <button id="validateFormulaire" type="submit" class="boutonF">
                                <p>Valider les Modifications</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('./views/includes/footer.php') ?>