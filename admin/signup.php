<?php
    require('controles/signupAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription-Admin</title>
    <link rel="stylesheet" href="assets/design/style.css">
</head>
<body>
    <div class="contenu">
        <div class="colone_gauche">
            <h1>Bienvenu à la plateforme de gestion de stage en entreprise</h1>
            <p>Le SGSE est une plateforme dédiée à la fois aux entreprises locaux ou internationaux résidant au Tchad et aux étudiants de divers domaines de faire des échanges en temps réel.</p>
            <p>Cette plateforme permet aux entreprises d'accèder à un espace privé après avoir connecter à la platefome de gérer son propre système de gestion de stagiaire au sein de l'entreprise.</p>
        </div>
        <div class="colone_droite">
            <form action="" method="POST">
                <div class="entete_formulaire"></div>
                <div class="titre"><h1>Inscription-Admin</h1>
                <hr></div>
             
                <div class="affiche_erreurs">
                    <?php
                        if (isset($message)) {
                            echo '<h2>'.$message.'</h2>';
                        }
                    ?>
                </div>
                <input type="text" name="nom" id="nom" placeholder="Nom..." value="">
                <input type="text" name="prenom" id="prenom" placeholder="Prénom..." value="">
                <input type="email" name="email" id="email" placeholder="E-mail..." value="">
                <input type="password" name="mpd" id="mdp" placeholder="Mot de passe...">
                <input type="password" name="cmpd" id="cmdp" placeholder="Confirmation Mot de passe...">
                <input type="file" name="file" id="file">
                <input type="submit" name="valider" value="S'inscrire">
                <div class="compte">
                    <h3>J'ai déjà un compte Admin,<a href="login.php"> je me connecte</a></h3>
                </div>
            </form>
        </div>
    </div>
</body>
</html>