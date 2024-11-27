<?php 

if (isset($_GET["id"])) {
    $m = recupererUnMedicament($_GET["id"]);
}else{
    header("Location:?page=home");
}


$medocs = medicamentsSimilaires($m->idcategorie);


require_once("includes/entete.php"); 

require_once("views/shop-single.php");

require_once("includes/pied.php");
