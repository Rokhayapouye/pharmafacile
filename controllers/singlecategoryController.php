<?php 


if (isset($_GET["id"])) {
    $cat = recupererUneCategorie($_GET["id"]);
}else{
    header("Location:?page=home");
}

$medocs = medicamentsSimilaires($cat->id);

require_once("includes/entete.php");


 require_once("views/singlecategory.php");

 require_once("includes/pied.php");
