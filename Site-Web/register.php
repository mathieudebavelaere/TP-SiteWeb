<?php
require_once('./views/includes/header.php');
include_once('./controllers/registerController.php');
?>
<div class="backImg">

    <div class="container">
        <?php
        if (count($formErrors) == 0 && isset($_POST['submit']) )
        { 
        ?>
            <div class="boxConnect">
                <h2 class="titleConnect">Inscription Validée</h2>
                <h3 class="titleConnectTwo">Connexion</h3>
                <form action="index.php" method="POST" enctype="multipart/form-data">
                    <div class="childBoxConnect">
                        <label class="labelBox" for="eMail">e-mail</label>
                        <input id="lastName" name="eMail" type="text" class="box" placeholder="Jean">
                    </div>
                    <div class="childBoxConnect">
                        <label class="labelBox" for="passWord">Mot de passe</label>
                        <input id="lastName" name="eMail" type="text" class="box" placeholder="*****">
                    </div>
                    <div class="childBoxButton">
                        <input class="buttonBox" type="submit" name="submit" value="Connexion">
                    </div>
                </form>
            </div>
        <?php
        } else {
        ?>

            <h2>Inscription</h2>

            <form class="register" action="register.php" method="POST" enctype="multipart/form-data">
                <div class="childBoxCivil">
                    <label class="labelBox" for="civility">Civilité</label>
                    <select class="boxSelect <?= isset($formErrors['civility']) ? 'error' : '' ?>" name="civility" id="civility" value="<?= isset($_POST['civility']) ?>">
                        <option selected disabled>--</option>
                        <option value="Monsieur">Monsieur</option>
                        <option value="Madame">Madame</option>
                    </select>
                    <div class="boxInfo"><?= @$formErrors['civility'] ?></div>
                </div>

                <div class="childBox">
                    <label class="labelBox" for="firstName">Prénom</label>
                    <input id="firstName" name="firstName" type="text" class="box <?= isset($formErrors['firstName']) ? 'error' : '' ?>" placeholder="Dupont" value="<?= @$_POST['firstName'] ?>">
                    <p class="boxInfo"><?= @$formErrors['firstName'] ?></p>
                </div>

                <div class="childBox">
                    <label class="labelBox" for="lastName">Pseudo</label>
                    <input id="lastName" name="lastName" type="text" class="box <?= isset($formErrors['lastName']) ? 'error' : '' ?>" placeholder="Jean" value="<?= @$_POST['lastName'] ?>">
                    <p class="boxInfo"><?= @$formErrors['lastName'] ?></p>
                </div>

                <div class="childBoxFile">
                    <label class="labelBox" for="resume">Avatar</label>
                    <div class="boxUp">
                        <div class="boxFile <?= isset($formErrors['resume']) ? 'error' : '' ?>">
                            <p class="boxFileTitle">Choisir un fichier .jpeg</p>
                        </div>
                        <input id="resume" name="resume" type="file" class="boxFileType">
                    </div>
                    <p class="boxInfo"><?= @$formErrors['resume'] ?></p>
                </div>

                <div class="childBox">
                    <label class="labelBox" for="eMail">E-mails</label>
                    <input id="eMail" name="eMail" type="email" class="box <?= isset($formErrors['eMail']) ? 'error' : '' ?>" placeholder="JeanDupont@email.fr" value="<?= @$_POST['eMail'] ?>">
                    <p class="boxInfo"><?= @$formErrors['eMail'] ?></p>
                </div>


                <div class="childBox">
                    <label class="labelBox" for="passWord">Mot de passe</label>
                    <input id="passWord" name="passWord" type="password" class="box <?= isset($formErrors['passWord']) ? 'error' : '' ?>" placeholder="Mot de passe">
                    <p class="boxInfo"><?= @$formErrors['passWord'] ?></p>
                </div>

                <div id="boxList" class="none">
                    <ul>
                        <li id="lower"><span><span class="material-symbols-outlined checkBoxNone">radio_button_unchecked</span></span><span></span>minimum 1 miniscule</li>
                        <li id="upper"><span><span class="material-symbols-outlined">radio_button_unchecked</span></span><span></span>minimum 1 majuscule</li>
                        <li id="number"><span><span class="material-symbols-outlined">radio_button_unchecked</span></span><span></span>minimum 1 chiffres</li>
                        <li id="special"><span><span class="material-symbols-outlined">radio_button_unchecked</span></span><span></span>minimum 1 caractère spécial</li>
                        <li id="stringlength"><span><span class="material-symbols-outlined">radio_button_unchecked</span></span><span></span>minimum 8 caractères</li>
                    </ul>
                </div>

                <div class="childBox">
                    <label class="labelBox" for="confPassWord">Confirmation de mot de passe</label>
                    <input id="confPassWord" name="confPassWord" type="password" class="box <?= isset($formErrors['confPassWord']) ? 'error' : '' ?>" placeholder="Confirmation de mot de passe">
                    <p class="boxInfo"><?= @$formErrors['confPassWord'] ?></p>
                </div>

                <div class="childBoxButton">
                    <input class="buttonBox" type="submit" name="submit" value="Validation du formulaire">
                </div>

            </form>
    </div>
<?php } ?>
</div>
<?php require_once('./views/includes/footer.php') ?>