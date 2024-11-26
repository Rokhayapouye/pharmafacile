<?php



$erreur = "";

if (isset($_POST["inscrire"])) {
    extract($_POST);
    
    $mdp = password_hash(password: $mdp, algo: PASSWORD_DEFAULT, options: ["cost -> 12"]);
    if (CreerUnCompte($prenom, $nom, $tel, $adresse, $email, $mdp, "client")) {
        header(header: "location:?page=connexion");
        exit();
    }
}

require_once("includes/entete.php");
require_once("views/inscription.php");

require_once("includes/pied.php");
