<?php

if (isset($_SESSION["user"])) {
    $panier = panierUtilisateur($_SESSION["user"]->id);
    $montantTotal = montantPanier($_SESSION["user"]->id);
}

require_once("includes/entete.php");
require_once("views/panier.php");


require_once("includes/pied.php");
