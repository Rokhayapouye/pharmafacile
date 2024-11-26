<div class="container">
    <div class="card">
        <div class="card-header row">
            <h1 class="col-md-10">Liste des administrateurs</h1>
            <div class="col-md-2 text-end">
                <a href="?page=admin&type=add" class="btn btn-success">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Prenom</td>
                        <td>Nom</td>
                        <td>Telephone</td>
                        <td>Adresse</td>
                        <td>Email</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($admins as $a): ?>
                        <tr>
                            <td><?= $a->prenom ?></td>
                            <td><?= $a->nom ?></td>
                            <td><?= $a->tel ?></td>
                            <td><?= $a->adresse ?></td>
                            <td><?= $a->email ?></td>
                            <td>
                                <a href="?page=admin&type=edit&id=<?= $a->id?>" class="btn btn-primary">Editer</a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#my-modal<?= $a->id ?>" class="btn btn-danger">Supprimer</a>
                               
                                <div id="my-modal<?= $a->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="my-modal-title">Suppression</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Êtes-vous sûr de vouloir supprimer ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="?page=admin&idadmin=<?= $a->id ?>" class="btn btn-success">Oui</a>
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