<?php
$formErrors=[];
// ci-dessous ont vient créer un tableau avec nos conditions de REGEX.
$regex = [
    'name' => '/^[A-Za-z -\'áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1,30}$/',
];
// ci-dessous ont utilise 'uniqid()' pour renomer les fichier uploader.
$path = 'upload/' . uniqid() . '.jpeg';


// ci-dessous ont vient créer une condition avec avec un 'isset'.
if (isset($_POST['submit'])) {

    /*-----Civilité-------*/

    if (!empty($_POST['civility'])) {
        if ($_POST['civility'] == 'Monsieur' ||  $_POST['civility'] == 'Madame') {
            $civility = $_POST['civility'];
        } else {
            $formErrors['civility'] = 'la civiliter peux contenir Monsieur ou Mada';
        }
    } else {
        $formErrors['civility'] = 'la civiliter est obligatoire';
    }

    /*-----Last-Name-------*/

    if (!empty($_POST['lastName'])) {
        if (preg_match($regex['name'], $_POST['lastName'])) {
            $lastName = strip_tags($_POST['lastName']);
        } else {
            $formErrors['lastName'] = 'le prénom peux contenir les espaces, les tirets, les accents, les miniscules et majuscules.';
        }
    } else {
        $formErrors['lastName'] = 'le prénom est obligatoire';
    }

    /*------First-Name------*/

    if (!empty($_POST['firstName'])) {
        if (preg_match($regex['name'], $_POST['firstName'])) {
            $firstName = strip_tags($_POST['firstName']);
        } else {
            $formErrors['firstName'] = 'le prénom peux contenir les espaces, les tirets, les accents, les miniscules et majuscules.';
        }
    } else {
        $formErrors['firstName'] = 'le prénom est obligatoire';
    }

    /*------File------*/

    //ci-dessous on sécurise l'envoie en testant avec 'errors' et il différent de '4'.
    if (($_FILES['resume']['error'] != 4)) {
        if ($_FILES['resume']['error'] == 0) {
            $authorizedExtention = 'pdf';
            $fileInfo = pathinfo($_FILES['resume']['name']);

            if ($fileInfo['extension'] == $authorizedExtention && mime_content_type($_FILES['resume']['tmp_name']) == 'application/pdf') {
                if (move_uploaded_file($_FILES['resume']['tmp_name'], $path)) {
                    chmod($path, '664');
                    $resume = $path;
                } else {
                    $formErrors['resume'] = 'une erreur est survenue.';
                }

            } else {
                $formErrors['resume'] = 'l\'envoie du C.V. doit être au format  \' .pdf \' obligatoirement';
            }
        } else {
            $formErrors['resume'] = 'l\'envoie du fichier est obligatoire';
        }
    } else {
        $formErrors['resume'] = 'l\'envoie du fichier est obligatoire';
    }

    /*------E-Mail-----*/
    if (!empty($_POST['eMail'])) {
        if (filter_var($_POST['eMail'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['eMail'];
        } else {
            $formErrors['eMail'] = 'l\'adresse mail doit comporter uniquement des lettres, des chiffres, des tirets, des underscores et @.';
        }
    } else {
        $formErrors['eMail'] = 'l\'adresse mail est obligatoire';
    }

    /*-----Pass-Word----*/

    if (!empty($_POST['passWord'])) {
        if (strlen($_POST['passWord']) >= 8) {
            $password = password_hash($_POST['passWord'], PASSWORD_BCRYPT);
        } else {
            $formErrors['passWord'] = 'le mot de passe doit contenir au minimum 8 caractères';
        }
    } else {
        $formErrors['passWord'] = 'le mot de passe est obligatoire';
    }

      /*-----Pass-Word-Confirm---*/
      if (!empty($_POST['confPassWord']) != !empty($_POST['passWord'])) {
        $formErrors['confPassWord'] = 'les mots de passe ne sont pas identique';
        } else {
            $formErrors['confPassWord'];
        }
}
