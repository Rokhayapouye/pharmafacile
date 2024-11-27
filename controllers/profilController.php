<?php 
if (isset($_POST["modifier"])) {
   extract($_POST);
   
}
if (isset($_SESSION["user"])) {
    $user = recupererUnUtilisateur($_SESSION["user"]->id);
}
if (isset($_POST["modifier"])) {
    extract($_POST);
   
    if (modifierUnUtilisateur($_SESSION["user"]->id,$prenom, $nom, $tel, $adresse, $email)) {
     header("location:?page=profilAdmin");
    }
 }


 require_once("includes/header.php");

require_once("views/profilAdmin.php");

require_once("includes/footer.php");
