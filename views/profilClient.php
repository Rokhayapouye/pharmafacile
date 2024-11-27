<section class="accomodation_area section_gap">
    <div class="container row">
    <p class="d-flex flex-column col-md-3">
  <a class="btn btn-primary" data-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="info">
    Mes informations
  </a>
<a class="btn btn-primary mt-3" data-toggle="collapse" href="#commande" role="button" aria-expanded="false" aria-controls="commande">
    Mes commandes
  </a>
  <a class="btn btn-primary mt-3" data-toggle="collapse" href="#password" role="button" aria-expanded="false" aria-controls="password">
    Mot de Passe
  </a>
  <a class="btn btn-outline-danger mt-3" data-toggle="collapse" href="#commande">
    Deconnexion
  </a>
  </p>
<div class=" col-md-9">
<div class="collapse-show" id="info">
  <div class="card card-body">
   <h3>Mes informations</h3>
   <form action="" method="post">
    <div class="row">
    <div class="form-group col-md-6">
      <label for="">Prenom</label>
      <input type="text" name="prenom" required class="form-control " >
    </div>
    <div class="form-group col-md-6">
      <label for="">Nom</label>
      <input type="text" name="nom" value="<?= $user->prenom ?>" required class="form-control"  >
    </div>
    <div class="form-group col-md-6">
      <label for="">Telephone</label>
      <input type="text" name="tel" value="<?= $user->telephone ?>" required class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label for="">Adresse</label>
      <input type="number" name="adresse" value="<?= $user->adresse ?>" required class="form-contro"l  >
    </div>
    <div class="form-group col-md-6">
      <label for="">Email</label>
      <input type="email" name="email" value="<?= $user->email ?>" required class="form-control"  >
    </div>
    </div>
    <button name="modifier" type="submit" class="btn btn-outline-warning">Modifier</button>
   </form>
  </div>
  <div class="collapse" id="commande">
  <div class="card card-body">
   <h1>Mes commandes</h1>
   <table class="table">
    <thead>
      <tr>
        <th>Reference</th>
        <th>Produits</th>
        <th>Traitement</th>
        <th>Montant</th>
        <th>Statut</th>

      </tr>
    </thead>
   </table>
  </div>
  <div class="collapse" id="password">
  <div class="card card-body">
   <h3>Changement de mot de passe</h3>
   <div class="row">
    <div class="form-group">
      <label for="">Mot de passe actuel</label>
      <input type="password" name="motdepass" required class="form-control col-md-4" >
    </div>
    <div class="form-group">
      <label for=""> Nouveau mot de passe</label>
      <input type="password" name="nouveaumotdepass" required class="form-control col-md-4" >
    </div>
    <div class="form-group">
      <label for=""> Mot de passe de confirmation</label>
      <input type="password" name="motdepassconfirm" required class="form-control col-md-4" >
    </div>
    </div>
    <button name="editpassword" type="submit" class="btn btn-outline-warning">Modifier</button>
  </div>
</div>
</div>
    </div>
</section>