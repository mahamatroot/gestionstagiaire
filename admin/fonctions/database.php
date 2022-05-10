<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=gestion_stage;', 'root', '');
    } catch (Exception $e) {
        die('Erreur! lors de la connexion à la base de données.' .$e->getMessage());
        exit();
    }