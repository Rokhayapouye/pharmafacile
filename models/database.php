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

function recupererUnUtilisateur($id)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function recupererTousLesAdmins()
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE role=:role");
        $q->execute(["role" => "admin"]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function recupererTousLesClients()
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE role=:role");
        $q->execute(["role" => "admin"]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function CreerUnCompte($prenom, $nom,$tel, $adresse, $email, $mdp, $role)
{
    global $db;
    try {
        $q = $db->prepare("INSERT INTO users VALUES (null, :prenom, :nom, :tel, :adresse,:email, :mdp, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "tel" => $tel,
            "adresse" => $adresse,
            "email" => $email,
            "mdp" => $mdp,
            "role" => $role


        ]);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function modifierUnUtilisateur($id, $prenom, $nom,$tel, $adresse, $email)
{
    global $db;
    try {
        $q = $db->prepare("UPDATE users SET prenom =:prenom, nom =:nom, tel =:tel, adresse =:adresse, email =:email
                            WHERE id =:id");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "tel" => $tel,
            "adresse" => $adresse,
            "email" => $email,
            "id" => $id
        ]);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function supprimerUnUtilisateur($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM users WHERE id=:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
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
function ajoutMedicament($image, $nom, $prix,$disponibilite, $qtestock, $description, $peremption, $idcategorie){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO medicaments VALUES (null, :image, :nom, :prix, :disponibilite, :qtestock, :description, :peremption, :idcategorie)");
        return $q->execute([
            "image" => $image,
            "nom" => $nom,
            "prix" => $prix,
            "disponibilite" => $disponibilite,
            "qtestock" => $qtestock,
            "description" => $description,
            "peremption" => $peremption,
            "idcategorie" => $idcategorie,


        ]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function medicamentsSimilaires($idcategorie)
{
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM medicaments WHERE idcategorie =:idcategorie");
        $q->execute(["idcategorie" => $idcategorie]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:" . $th->getMessage() . " à la ligne:" . __LINE__);
    }
}

function recupererTousMedicaments()
{
    global $db;
    try {
        $q = $db->prepare("SELECT m.id as id, m.image as image, m.nom as nom, prix, disponibilite, qtestock, description, peremption, c.nom as nomcategorie
                 FROM medicaments m, categories c
                WHERE m.idcategorie = c.id");
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

function editCategorie($id, $nom, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE categories SET nom =:nom, image =:image WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "id" => $id,
            "image" => $image
        ]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}
function editMedicaments($id, $image, $nom, $prix, $disponibilite, $qtestock, $description, $peremption){
    global $db;
    try {
        $q = $db->prepare("UPDATE medicaments SET image =:image, nom =:nom, prix =:prix, disponibilite =:disponibilite, qtestock =:qtestock, description =:description, peremption =:peremption WHERE id=:id");
        return $q->execute([
            "id" => $id,
            "image" => $image,
            "nom" => $nom,
            "prix" => $prix,
            "disponibilite" => $disponibilite,
            "qtestock" => $qtestock,
            "description" => $description,
            "peremption" => $peremption,
        ]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}

<<<<<<< HEAD
  function avoirInfoUtilisateur($id){
      global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE id =:id");
        $q ->execute(["id" =>$id]);
        return $q->fetch(PDO::FETCH_OBJ);
    }catch (PDOException $th) {
        die("Erreur:". $th->getMessage());
    }
}
=======
function ajoutPanier($idmedicament, $nombre, $iduser, $total){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO panier VALUES(null, :idmedicament, :nombre, :iduser, :total)");
        return $q->execute([
            "idmedicament" => $idmedicament,
            "nombre" => $nombre,
            "iduser" => $iduser,
            "total" => $total,
        ]);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}

function panierParIdMedicament($idmedicament){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM panier WHERE idmedicament =:idmedicament");
        $q->execute([
            "idmedicament" => $idmedicament
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}

function panierUtilisateur($iduser){
    global $db;
    try {
        $q = $db->prepare("SELECT nom, nombre, m.image as image, m.prix as prix, total
                FROM panier p, medicaments m
                 WHERE p.idmedicament = m.id AND iduser =:iduser");
        $q->execute([
            "iduser" => $iduser
        ]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}

function montantPanier($iduser){
    global $db;
    try {
        $q = $db->prepare("SELECT sum(total) as somme
                FROM panier p
                 WHERE iduser =:iduser");
        $q->execute([
            "iduser" => $iduser
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur:". $th->getMessage(). " à la ligne:". __LINE__);
    }
}

>>>>>>> 41fc72a17568965cc1606179e69013e1fc7f0574
