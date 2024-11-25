<?php

require_once("includes/entete.php");


$erreur = "";
if (isset($_POST["connecter"])) {
   extract($_POST);
   $user = seconnecter($email);

   if($user && password_verify($mdp, $user->mdp)) {
      $_SESSION["user"] = $user;
   
      if(isset($user) && $user->role=="user"){
         header("Location:?page=profil");
         exit();
      }
      
      if(isset($user) && $user->role=="admin"){
         header("Location:?page=dashboard");
         exit();
      }
     
   } else {
      $erreur = "Identifiant incorrect";
   }
}

require_once("views/login.php");
require_once("includes/pied.php");


   ?>