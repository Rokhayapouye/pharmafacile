<?php




if (isset($_POST["ajouter"])) {
    extract($_POST);
    $img = $_FILES["image"]["tmp_name"];
    $img_name = uniqid()."jpg";
    if (ajoutMedicament($img_name, $nom, $prix, $disponibilite, $qtestock, $description, $peremption)) {
     move_uploaded_file($img, "images/".$img_name);
     header("location:?page=medicaments");
    }
 }
 
 if (isset($_GET["idmedicament"])) {
    if (supprimerUnMedicament($_GET["idmedicament"])) {
     header("Location:?page=medicaments");
     exit();
    }
 }
$medicaments = recupererTousMedicaments();


require_once("includes/header.php");

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $c = recupererUnMedicament($_GET["id"]);
    }

    require_once("views/addMedicaments.php");

}else{
    require_once("views/medicaments.php");
 }




require_once("includes/footer.php");

