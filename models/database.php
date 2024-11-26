<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=pharmafacile', 'root', '');
} catch (PDOException $th) {
    die("Erreur :" . $th->getMessage() . " à la ligne:" . __LINE__);
}

function seconnecter($email)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");
        $q->execute(["email" => $email]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function CreerUnCompte($prenom, $nom, $email, $mdp, $role)
{
    global $db;
    try {
        $q = $db->prepare("INSERT INTO users VALUES (null, :prenom, :nom  ,:email, :mdp, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "email" => $email,
            "mdp" => $mdp,
            "role" => $role


        ]);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function ajoutCategorie($nom, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO categories VALUES (null, :nom, :image)");
        return $q->execute([
            "nom" => $nom,
            "image" => $image
        ]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function recupererToutesCategories()
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function recupererUneCategorie($id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function supprimerUneCategorie($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM categories WHERE id=:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}
function ajoutMedicament($image, $nom, $prix,$disponibilite, $qtestock, $description, $peremption){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO medicaments VALUES (null, :image, :nom, :prix, :disponibilite, :qtestock, :description, :peremption)");
        return $q->execute([
            "image" => $image,
            "nom" => $nom,
            "prix" => $prix,
            "disponibilite" => $disponibilite,
            "qtestock" => $qtestock,
            "description" => $description,
             "peremption" => $peremption,

        ]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function recupererTousMedicaments()
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM medicaments ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}
function recupererUnMedicament($id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM medicaments WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function supprimerUnMedicament($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM medicaments WHERE id=:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}

