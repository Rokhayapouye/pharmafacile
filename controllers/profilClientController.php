<?php

require_once("includes/entete.php");

if (isset($_SESSION["user"])) {
    $user = avoirInfoUtilisateur($_SESSION["user"]->id); 
   //ou
    //$user = $_SESSION["user"];
}else{
    header("location:?page=home");
    exit();
}




require_once("includes/pied.php");
