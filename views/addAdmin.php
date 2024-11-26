<div class="card container">
    <div class="card-header row">
        <h2 class="col-md-10">Formulaire d'<?= isset($a) ? "edition" : "ajout" ?> administrateur</h2>
        <div class="col-md-2 text-end">
        <a href="?page=admin" class="btn btn-info">Retour</a>

        </div>
    </div>
    <div class="card-body">
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
                <input type="text" value="<?= isset($a) ? $a->tel : '' ?>" name="tel" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Adresse</label>
                <input type="text" value="<?= isset($a) ? $a->adresse : '' ?>" name="adresse" class="form-control" required>
            </div>
            <div class="form-froup col-md-6">
                <label for="">Email</label>
                <input type="email" value="<?= isset($a) ? $a->email : '' ?>" name="email" class="form-control" required>
            </div>
        <?php if(!isset($a)): ?>

            <div class="form-froup  col-md-6 ">
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control" required>
            </div>
        <?php endif; ?>
            
        </div>
        <?php if(isset($a)): ?>
                <button type="submit" name="modifier" class="btn mt-3 btn-warning">Modifier</button>
            <?php else: ?>
        <button type="submit" class="btn btn-success mt-3 r" name="ajouter">Creer</button>
        <?php endif; ?>
    
    </form>
    </div>
</div>