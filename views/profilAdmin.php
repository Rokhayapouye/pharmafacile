<div class="card container">
    <div class="card-header row">
        <h2 class="col-md-10">Profil</h2>
    </div>
    <div class="card-body">
    <form action="" method="post">
        <div class="row">
            <div class="form-froup mt-3 col-md-6 ">
                <label for="">Prenom</label>
                <input type="text" value="<?= $user->prenom ?>" name="prenom" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Nom</label>
                <input type="text" value="<?= $user->nom ?>" name="nom" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Telephone</label>
                <input type="text" value="<?= $user->tel ?>" name="tel" class="form-control" required>
            </div>
            <div class="form-froup mt-3 col-md-6">
                <label for="">Adresse</label>
                <input type="text" value="<?= $user->adresse ?>" name="adresse" class="form-control" required>
            </div>
            <div class="form-froup col-md-6">
                <label for="">Email</label>
                <input type="email" value="<?= $user->email ?>" name="email" class="form-control" required>
            </div>

            <div class="form-froup  col-md-6 ">
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control" >
            </div>
            
        </div>
        
                <button type="submit" name="modifier" class="btn mt-3 btn-warning">Modifier</button>
            
    </form>
    </div>
</div>