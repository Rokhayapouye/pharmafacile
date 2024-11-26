<?php

if (isset($_POST["ajouter"])) {
    extract($_POST);

     $mdp = password_hash(password: $mdp, algo: PASSWORD_DEFAULT, options: ["cost -> 12"]);
    if (CreerUnCompte($prenom, $nom, $tel, $adresse, $email, $mdp, "client")) {
        header(header: "location:?page=admin");
        exit();
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
   
    if (modifierUnUtilisateur($_GET["id"],$prenom, $nom, $tel, $adresse, $email)) {
     header("location:?page=admin");
    }
 }

if (isset($_GET["idadmin"])) {
   if (supprimerUneCategorie($_GET["idadmin"])) {
    header("Location:?page=admin");
    exit();
   }
}





$admins = recupererTousLesAdmins();


require_once("includes/header.php");

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $a = recupererUnUtilisateur($_GET["id"]);
    }

    require_once("views/addAdmin.php");

}else{
    require_once("views/admin.php");
}



require_once("includes/footer.php");
