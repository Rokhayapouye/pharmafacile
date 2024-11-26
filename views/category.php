<div class="container">
    <div class="card">
        <div class="card-header row ">
            <h1 class="col-md-10">Liste des categories</h1>
            <div class="col-md-2 text-end">
                <a href="?page=category&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $c): ?>
                        <tr>
                            <td><img src="images/<?= $c->image ?>" width="200" height="75" alt=""></td>
                            <td><?= $c->nom ?></td>
                            <td>
                                <a href="?page=category&type=edit&id=<?= $c->id?>" class="btn btn-primary">Editer</a>
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
                                                <a href="?page=category&idcategory=<?= $c->id ?>" class="btn btn-success">Oui</a>
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