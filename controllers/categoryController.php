<?php

if (isset($_POST["ajouter"])) {
   extract($_POST);
   $img = $_FILES["image"]["tmp_name"];
   $img_name = uniqid()."jpg";
   if (ajoutCategorie($nom, $img_name)) {
    move_uploaded_file($img, "images/".$img_name);
    header("location:?page=category");
   }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    $c = recupererUneCategorie($_GET["id"]);

    if ($_FILES["image"]["size"] > 0) {
        $img = $_FILES["image"]["tmp_name"];
        $img_name = uniqid()."jpg";
        move_uploaded_file($img, "images/".$img_name);
    }else{
        $img_name = $c->image;
    }
    if (editCategorie($_GET["id"], $nom, $img_name)) {
     header("location:?page=category");
    }
 }

if (isset($_GET["idcategory"])) {
   if (supprimerUneCategorie($_GET["idcategory"])) {
    header("Location:?page=category");
    exit();
   }
}

 



$categories = recupererToutesCategories();

require_once("includes/header.php");

if (isset($_GET["type"])) {
    if (isset($_GET["id"])) {
        $c = recupererUneCategorie($_GET["id"]);
    }

    require_once("views/addCategory.php");

}else{
    require_once("views/category.php");
}



require_once("includes/footer.php");
