<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conenexion-Admin</title>
    <link rel="stylesheet" href="assets/design/style.css">
</head>
<body>
    <div class="contenu">
        <div class="colone_gauche">
            <h1>Bienvenu à la plateforme de gestion de stage en entreprise</h1>
            <p>Le SGSE est une plateforme dédiée à la fois aux entreprises locaux ou internationaux résidant au Tchad et aux étudiants de divers domaines de faire des échnages en temps réel.</p>
            <p>Cette plateforme permet aux entreprises d'accèder à un espace privé après avoir connecter à la platefome de gérer son propre système de gestion de stagiaire au sein de l'entreprise.</p>
        </div>
        <div class="colone_droite">
            <form action="" method="POST">
                <div class="entete_formulaire"></div>
                <div class="titre"><h1>Connexion-Admin</h1>
                <hr></div>
             
                <div class="affiche_erreurs">
                    <h2>Erreur! Votre compte Admin a été désactivé.</h2>
                </div>
                <input type="email" name="email" id="email" placeholder="E-mail..." value="">
                <input type="password" name="mpd" id="mdp" placeholder="Mot de passe...">
                <input type="submit" name="valider" value="Se connecter">
                <div class="mdpp">
                    <h3><a href="resetPassword.php">Mot de passe oublié</a></h3>
                </div>
                <div class="compte">
                    <h3>Je n'ai pas un compte Admin,<a href="signup.php"> je m'inscris</a></h3>
                </div>
            </form>
        </div>
    </div>
</body>
</html>