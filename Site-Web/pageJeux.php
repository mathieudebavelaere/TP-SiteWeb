<?php
require('./views/includes/header.php')
?>

<body>
    <div class="containerFull">
        <!-------------------Volet-Gauche---------------------->
        <div id="corps">
            <div id="BoiteGame">
                <div id="voletG">
                    <!--------------------Card----------------------->
                    <?php require('./views/games-card/call-of-duty-modern-warfare-two.php') ?>
                    <!--------------------Card----------------------->

                    <!--------------------Onglets----------------------->
                    <div id="boiteBoutonGame">
                        <div id="boiteLike">
                            <button id="like"><span class="material-symbols-outlined boutonlike">
                                    thumb_up
                                </span></button>
                            <button id="noLike"><span class="material-symbols-outlined boutonlike">
                                    thumb_down
                                </span></button>
                        </div>
                        <button id="Description">
                            <p>Descriptions</p>
                        </button>
                        <button id="Trophées">
                            <p>Liste des trophées</p>
                        </button>
                    </div>


                    <!--------------------Onglets----------------------->
                </div>
                <!-------------------Volet-Droit---------------------->
                <div id="voletD">
                    <!--------------------Description-du-jeux---------------------->
                    <div id="boiteDescription" class="VisibleGame">
                        <div class="boiteTextTitle">
                            <h1 class="titleGame">Call Of Duty </br> Modern Warfare Two</h1>
                        </div>
                        <div class="boiteText">
                            <h2 class="colorTitle">Plates-formes :</h2>
                            <ul class="platform">
                                <li>
                                    <p>PS5</p>
                                </li>
                                <li>
                                    <p>Xbox Series</p>
                                </li>
                                <li>
                                    <p>PS4</p>
                                </li>
                                <li>
                                    <p>Xbox One</p>
                                </li>
                                <li>
                                    <p>Microsoft Windows</p>
                                </li>
                            </ul>
                        </div>
                        <div class="boiteText">
                            <h2 class="colorTitle">Date de sortie initiale :</h2>
                            <p>27 octobre 2022</p>
                        </div>
                        <div class="boiteText">
                            <h2 class="colorTitle">Synopsis :</h2>
                            <p>
                                Version reboot de l'emblématique jeu de tir à la première personne sorti en 2009,
                                Call of Duty Modern Warfare 2 offre une expérience multi et solo ayant pour but de raviver
                                la
                                flamme de son illustre prédécesseur. Le jeu bénéficie de nouveaux graphismes et d'une
                                refonte
                                complète. Il devrait être le début d'une nouvelle ère pour la licence.
                            </p>
                        </div>
                    </div>

                    <!--------------------Description-du-jeux---------------------->
                    <!--------------------Trophée----------------------->
                    <div id="boiteTrophée" class="NoVisibleGame">
                        <!--------------------Trophée-Total--------------------->
                        <div id="totalTrophee">
                            <img class="imgBox1" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/platine.png" alt="">
                            <ul class="textBox">
                                <li class="textBox3">1</li>
                            </ul>
                            <img class="imgBox1" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                            <ul class="textBox">
                                <li class="textBox3">6</li>
                            </ul>
                            <img class="imgBox1" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                            <ul class="textBox">
                                <li class="textBox3">14</li>
                            </ul>
                            <img class="imgBox1" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/bronze.png" alt="">
                            <ul class="textBox">
                                <li class="textBox3">4</li>
                            </ul>
                        </div>
                        <!--------------------Trophée-Total--------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/1M56321e.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Nous sommes RTB</li>
                                <li class="textBox2">Recueillir tous les trophées</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/platine.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/2M78b3dc.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Crocodile</li>
                                <li class="textBox2">Tirez sur trois ennemis sous l'eau dans "Wetwork"</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/3M0902f0.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Doit être du vent</li>
                                <li class="textBox2">Sauvez les otages en « compte à rebours » sans que les ennemis ne
                                    tirent leurs armes</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/4Mb079db.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Sans Armes</li>
                                <li class="textBox2">Terminez "En solitaire" sans tirer sur un pistolet</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/5M829e0e.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Essai routier</li>
                                <li class="textBox2">Conduisez cinq types de véhicules en « Violence et chronométrage »</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/bronze.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/6M8be078.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Ghost-in-Training</li>
                                <li class="textBox2">Atteignez le penthouse de "El Sin Nombre" sans tuer personne ni
                                    déclencher l'alarme</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/7M94453d.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Ne touchez pas le pont !</li>
                                <li class="textBox2">Dans "Dark Water", avancez de 90 mètres vers l'avant du navire sans
                                    toucher le pont</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/8Mb94f11.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Garder celui-ci</li>
                                <li class="textBox2">Atteignez le prix en utilisant le premier véhicule que vous détournez
                                </li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/9M847e5a.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Gentleman voleur</li>
                                <li class="textBox2">Ouvrez trois coffres-forts dans la campagne</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/10Md83ac3.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Mur du devoir</li>
                                <li class="textBox2">Tuez trois ennemis avec le bouclier anti-émeute dans la campagne ou en
                                    coopération</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/bronze.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/11M1ecd19.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Daredevil</li>
                                <li class="textBox2">Alors que vous êtes affecté par un Flashbang, tuez deux ennemis dans la
                                    campagne ou en coopération</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/bronze.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/12Mee4805.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">La pratique rend parfait</li>
                                <li class="textBox2">
                                    Tirez sur toutes les cibles de la zone d'entraînement dans "Ghost Team"</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/13Md493c4.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Une façon de mourir de la crapy</li>
                                <li class="textBox2">Tuez l'ennemi dans le porta-potty</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/bronze.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/14Mcb0f49.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Nessie</li>
                                <li class="textBox2">Atteignez la barge sans être vu dans "Wetwork"</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/15Mb0f727.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Pas de temps à perdre</li>
                                <li class="textBox2">Complétez la séquence de vidéosurveillance en quatre minutes</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/16Me25ca2.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Type de sac à dos</li>
                                <li class="textBox2">Tuez des ennemis gazeux ou aveuglés à l'aide d'un Molotov, d'un Semtex
                                    et d'un Frag dans "Prison Break"</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/17M2625a1.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Couper les têtes des serpents</li>
                                <li class="textBox2">Terminez toutes les missions de la campagne sur la difficulté des
                                    anciens combattants ou du réalisme</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/18M3aa8a0.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Temps pour les pintes</li>
                                <li class="textBox2">Terminez la campagne en cas de difficulté</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/or.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/19Ma98aba-2.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Personne n'était là</li>
                                <li class="textBox2">Ne déclenchez jamais l'alarme dans "Recon by Fire"</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/20Mf7eaab.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Combat de nuit</li>
                                <li class="textBox2">Gagnez trois étoiles dans "Low Profile"</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/21M9c8104.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Hellride</li>
                                <li class="textBox2">Gagnez trois étoiles dans la zone refusée</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/22M50eff6.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Rois de la montagne</li>
                                <li class="textBox2">Gagnez trois étoiles dans 'Defender: Mt. Zaya'</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/23Mefbbfc.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Devenir sombre</li>
                                <li class="textBox2">Complétez le « profil bas » sans déclencher d'alarme</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/24Ma473c1.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">Seul le début</li>
                                <li class="textBox2">Gagnez au moins une étoile en coopération</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                        <!--------------------Trophée----------------------->
                        <div class="trophées">
                            <img class="imgBox" src="./assets/img/games/modern-warfare-two/trophy/25Mdab483.png" alt="">
                            <ul class="textBox">
                                <li class="textBox1">SSE complet</li>
                                <li class="textBox2">Trouvez 20 fragments d'intelligence dans Co-op</li>
                            </ul>
                            <img class="imgBox" src="./assets/img/settings/icons-platForms/playstation/PSN-Trophy/argent.png" alt="">
                        </div>
                    </div>
                    <!------------------FIN-de-Trophée----------------------->

                </div>
            </div>
        </div>
    </div>
    <!------------------------Footer------------------------->
    <?php require_once('./views/includes/footer.php') ?>