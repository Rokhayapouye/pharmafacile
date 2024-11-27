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
                <select type="text" value="<?= isset($c) ? $c->disponibilite : '' ?>"  class="form-control" name="disponibilite" required>
                    <option value="">Veuillez selectionner une option</option>
                    <option value="En Ligne" <?= (isset($c) && $c->disponibilite == "En Ligne") ? "selected" : "" ?> >En Ligne</option>
                    <option value="Presentiel" <?= (isset($c) && $c->disponibilite == "Presentiel") ? "selected" : "" ?> >Presentiel</option>
                </select>
            </div><div class="form-group">
                <label for="">Qtestock</label>
                <input type="number" value="<?= isset($c) ? $c->qtestock : '' ?>"  class="form-control" name="qtestock" required>
            </div><div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" value="<?= isset($c) ? $c->description : '' ?>"  required>   </textarea>
            </div><div class="form-group">
                <label for="">Peremption</label>
                <input type="date" value="<?= isset($c) ? $c->peremption : '' ?>"  class="form-control" name="peremption" required>
                </div><div class="form-group">
                <label for="">Categorie</label>
                <select   class="form-control" name="idcategorie" required>
                    <option value="">Veuillez selectionner une categorie</option>
                    <?php foreach($categories as $ca):?>
                        <option value="<?=$ca->id ?>" <?= (isset($c) && $c->idcategorie == $ca->id) ? "selected" : "" ?>><?= $ca->nom?> </option>
                    <?php endforeach;?>
                    
                </select>
            </div>
            
            <?php if(isset($c)): ?>
                <button type="submit" name="modifier" class="btn mt-3 btn-warning">Modifier</button>
            <?php else: ?>
                <button type="submit" name="ajouter" class="btn mt-3 btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>
    </div>
</div> 