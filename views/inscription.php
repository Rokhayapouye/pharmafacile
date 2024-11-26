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
                <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Nom</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Telephone</label>
                <input type="text" name="tel" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Adresse</label>
                <input type="text" name="adresse" class="form-control" required>
            </div>
            <div class="form-froup col-md-6">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-froup  col-md-6 ">
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control" required>
            </div>
            
        </div>
        <button type="submit" class="btn btn-success mt-3 r" name="inscrire">Creer</button>
        <a href="?page=connexion" class="mt-3 btn btn-success">Connexion</a>
    </form>
</div>