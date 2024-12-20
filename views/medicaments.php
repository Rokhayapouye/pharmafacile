<div class="container">
    <div class="card">
        <div class="card-header row">
            <h1 class="col-md-10">Liste des Medicaments</h1>
            <div class="col-md-2 text-end">
                <a href="?page=medicaments&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Disponibilité</th>
                        <th>Quantité en Stock</th>
                        <th>Description</th>
                        <th>Date de Peremption</th>
                        <th>Categorie</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($medicaments as $c): ?>
                        <tr>
                            <td><img src="images/<?= $c->image ?>" width="200" height="75" alt=""></td>
                            <td><?= $c->nom ?></td>
                            <td><?= $c->prix ?></td>
                            <td><?= $c->disponibilite ?></td>
                            <td><?= $c->qtestock ?></td>
                            <td><?= $c->description ?></td>
                            <td><?= $c->peremption ?></td>
                            <td><?= $c->nomcategorie ?></td>

                            <td>
                                <a href="?page=medicaments&type=edit&id=<?= $c->id?>" class="btn btn-primary">Editer</a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#my-modal<?= $c->id ?>" class="btn btn-danger">Supprimer</a>
                               
                                <div id="my-modal<?= $c->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="my-modal-title">Suppression</h5>
                                                <button class="close"  aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Êtes-vous sûr de vouloir supprimer ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="?page=medicaments&idmedicament=<?= $c->id ?>" class="btn btn-success">Oui</a>
                                                <a href="" class="btn btn-danger" data-bs-dismiss="modal" >Non</a>
                                                
                                                <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>