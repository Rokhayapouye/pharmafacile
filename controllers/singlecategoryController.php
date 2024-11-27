<?php 

$erreur = "";
$success = "";

if (isset($_GET["id"])) {
    $cat = recupererUneCategorie($_GET["id"]);
}else{
    header("Location:?page=home");
}


if (isset($_GET["idmedoc"])) {
    $m = recupererUnMedicament($_GET["idmedoc"]);
    $p = panierParIdMedicament($m->id);
    if($p){
        $erreur = "Le medicament existe deja dans le panier";
    }else{
        if(ajoutPanier($m->id, 1, $_SESSION["user"]->id, $m->prix)){
            $success = "AJout medicament avec succes";
        }
    }
}

$medocs = medicamentsSimilaires($cat->id);

require_once("includes/entete.php");


 require_once("views/singlecategory.php");

 require_once("includes/pied.php");
