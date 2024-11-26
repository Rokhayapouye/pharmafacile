<div class="container">
    <div class="card">
        <div class="card-header row">
            <h1 class="col-md-10">Formulaire d'<?= isset($c) ? "edition" : "ajout" ?> Categorie</h1>
            <div class="col-md-2 text-end">
                <a href="?page=category" class="btn btn-info">Retour</a>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" <?= isset($c) ? "" : 'required' ?> >
            </div>
            <div class="form-group"> 
                <label for="">Nom</label>
                <input type="text" value="<?= isset($c) ? $c->nom : '' ?>" class="form-control" name="nom" required>
            </div>
            <?php if(isset($c)): ?>
                <button type="submit" name="modifier" class="btn mt-3 btn-warning">Modifier</button>
            <?php else: ?>
                <button type="submit" name="ajouter" class="btn mt-3 btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</div>