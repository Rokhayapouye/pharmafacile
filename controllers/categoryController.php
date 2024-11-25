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
