<?php
    require('fonctions/database.php');

    if (!empty($_POST)) {
        extract($_POST);
        $valide = true;

        //verifions les champs s'ils sont vides.
        if (isset($_POST['valider'])) {
            
            //creons une variable pour chacune de données.
            $nom = htmlspecialchars(trim($_POST['nom']));
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $email = htmlspecialchars(strtolower(trim($_POST['email'])));
            $mdp = htmlspecialchars(trim($_POST['mdp']));
            $confirme = htmlspecialchars(trim($_POST['cmdp']));
            $image = htmlspecialchars(trim($_POST['file']));

            //verifcation du nom
            if (empty($nom)) {
                $valide = false;
                $message = 'Le champs nom ne peut pas être vide!';
            }else if(iconv_strlen($nom) < 3){
                $valide = false;
                $message = 'Votre nom est très court! il doit être compris entre 3 et 20 caractères.';
            }else if (iconv_strlen($nom) > 20) {
                $valide = false;
                $message = 'Votre nom est très long! il doit être compris entre 3 et 20 caractères.';
            }else if(!preg_match("/^[\p{L}0-9-]*$/u", $nom)){
                $valide = false;
                $message = 'Caractères acceptés : a à z, A à Z, 0 à 9, -, espace.';
            }
            //verification du prenom
            if (empty($prenom)) {
                $valide = false;
                $message = 'Le champs prenom ne peut pas être vide!';
            }else if(iconv_strlen($prenom) < 3){
                $valide = false;
                $message = 'Votre prenom est très court! il doit être compris entre 3 et 20 caractères.';
            }else if (iconv_strlen($prenom) > 20) {
                $valide = false;
                $message = 'Votre prenom est très long! il doit être compris entre 3 et 20 caractères.';
            }else if(!preg_match("/^[\p{L}0-9-]*$/u", $prenom)){
                $valide = false;
                $message = 'caractères acceptés : a à z, A à Z, 0 à 9, -, espace.';
            }
            //verification de mail
            if (empty($email)) {
                $valide = false;
                $message = 'Le email ne doit pas être vide!';
            }
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $valide = false;
                $message = 'Votre adresse email n\'est pas valide';

            }
        }
    }
?>