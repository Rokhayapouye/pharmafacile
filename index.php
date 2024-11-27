<?php 

session_start();
require_once("models/database.php");




if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'dashboard';
        require_once("controllers/dashboardController.php");
        break;
        case 'medicaments';
        require_once("controllers/medicamentsController.php");
        break;
        case 'admin';
        require_once("controllers/adminController.php");
        break;
        case 'category';
        require_once("controllers/categoryController.php");
        break;
        case 'panier';
        require_once("controllers/panierController.php");
        break;
        case 'shop-single';
        require_once("controllers/shop-singleController.php");
        break;
        case 'produits';
        require_once("controllers/produitsController.php");
        break;
        case 'vitamine';
        require_once("controllers/vitamineController.php");
        break;
        case 'contacts';
        require_once("controllers/contactsController.php");
        break; 
        case 'about';
        require_once("controllers/aboutController.php");
        break;
        case 'profil';
        require_once("controllers/profilController.php");
        break;
        case 'deconnexion';
        require_once("controllers/deconnexionController.php");
        break;
       case 'connexion';
        require_once("controllers/loginController.php");
        break;
        
       case 'inscription';
        require_once("controllers/inscriptionController.php");
        break;
  
      default:
        require_once("controllers/homeController.php");
        break;
  
    }
  
  
  } else {
    require_once("controllers/homeController.php");
  }
    
  