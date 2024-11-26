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
                <input type="file" class="form-control" name="image" required>
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            
            <div class="form-group">
                <label for="">Prix</label>
                <input type="number" class="form-control" name="prix" required>
            </div><div class="form-group">
                <label for="">Disponibilité</label>
                <input type="text" class="form-control" name="disponibilite" required>
            </div><div class="form-group">
                <label for="">Qtestock</label>
                <input type="number" class="form-control" name="qtestock" required>
            </div><div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" name="description" required>
            </div><div class="form-group">
                <label for="">Peremption</label>
                <input type="date" class="form-control" name="peremption" required>
            </div>
            <?php if(isset($c)): ?>
                <button type="submit" name="modifier" class="btn mt-3 btn-warning-success">Modifier</button>
            <?php else: ?>
                <button type="submit" name="ajouter" class="btn mt-3 btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</div> 