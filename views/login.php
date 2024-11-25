<div class="container mt-5 pt-5 col-md-4">
    <h1 class="text-center">
        Connexion
    </h1>
    <?php if ($erreur): ?>
        <div class="alert alert-danger">
            <?= $erreur ?>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-froup">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-froup mt-3">
            <label for="">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3 r" name="connecter">Se connecter</button>
        <a href="?page=inscription" class="mt-3 btn btn-success">Creer un compte</a>
    </form>
</div>



