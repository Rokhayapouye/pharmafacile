<div class="container">
    <div class="card">
        <div class="card-header row">
            <h1 class="col-md-10">Formulaire d'<?= isset($c) ? "edition" : "Ajout" ?> Medicament</h1>
            <div class="col-md-2 text-end">
                <a href="?page=medicaments" class="btn btn-info">Retour</a>
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image"  <?= isset($c) ? "" : 'required' ?>  >
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" value="<?= isset($c) ? $c->nom : '' ?>"  class="form-control" name="nom" required>
            </div>
            
            <div class="form-group">
                <label for="">Prix</label>
                <input type="number" value="<?= isset($c) ? $c->prix : '' ?>"  class="form-control" name="prix" required>
            </div><div class="form-group">
                <label for="">Disponibilité</label>
                <input type="text" value="<?= isset($c) ? $c->disponibilite : '' ?>"  class="form-control" name="disponibilite" required>
            </div><div class="form-group">
                <label for="">Qtestock</label>
                <input type="number" value="<?= isset($c) ? $c->qtestock : '' ?>"  class="form-control" name="qtestock" required>
            </div><div class="form-group">
                <label for="">Description</label>
                <input type="text" value="<?= isset($c) ? $c->description : '' ?>"  class="form-control" name="description" required>
            </div><div class="form-group">
                <label for="">Peremption</label>
                <input type="date" value="<?= isset($c) ? $c->peremption : '' ?>"  class="form-control" name="peremption" required>
            </div>
            <?php if(isset($c)): ?>
                <button type="submit" name="modifier" class="btn mt-3 btn-warning">Modifier</button>
            <?php else: ?>
                <button type="submit" name="ajouter" class="btn mt-3 btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</div> 