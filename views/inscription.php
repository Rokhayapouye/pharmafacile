<div class="container mt-5 pt-5 col-md-10">
    <h1 class="text-center">
        Création de compte
    </h1>
    <?php if ($erreur): ?>
        <div class="alert alert-danger">
            <?= $erreur ?>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="row">
            <div class="form-froup mt-3 col-md-6 ">
                <label for="">Prenom</label>
                <input type="text" value="<?= isset($a) ? $a->prenom : '' ?>" name="prenom" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Nom</label>
                <input type="text" value="<?= isset($a) ? $a->nom : '' ?>" name="nom" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Telephone</label>
                <input type="text" name="tel" value="<?= isset($a) ? $a->telephone : '' ?>" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Adresse</label>
                <input type="text" value="<?= isset($a) ? $a->adresse : '' ?>" name="adresse" class="form-control" required>
            </div>
            <div class="form-froup col-md-6">
                <label for="">Email</label>
                <input type="email" value="<?= isset($a) ? $a->email : '' ?>" name="email" class="form-control" required>
            </div>
            <div class="form-froup  col-md-6 ">
                <label for="">Mot de passe</label>
                <input type="password" value="<?= isset($a) ? $a->mdp : '' ?>" name="mdp" class="form-control" required>
            </div>
            
        </div>
        <a href="?page=profilUser"  class="btn btn-success mt-3 r" name="inscrire">Creer</a>
        <a href="?page=connexion" class="mt-3 btn btn-success">Connexion</a>
    </form>
</div>