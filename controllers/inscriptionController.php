<?php

require_once("includes/entete.php");


$erreur = "";

if (isset($_POST["inscrire"])) {
    extract($_POST);

     $mdp = password_hash(password: $mdp, algo: PASSWORD_DEFAULT, options: ["cost -> 12"]);
    if (CreerUnCompte($prenom, $nom, $email, $mdp, $role )) {
        header(header: "location:?page=connexion");
        exit();
    }
}
require_once("views/inscription.php");

require_once("includes/pied.php");
