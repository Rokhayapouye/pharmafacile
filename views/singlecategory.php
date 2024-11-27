<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="?page=home">acceuil</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?= ucfirst($cat->nom) ?></strong></div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php foreach($medocs as $m): ?>
          <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
            
            <a href="?page=shop-single"> <img src="images/<?= $m->image ?>" alt="Image"></a>
            <h3 class="text-dark"><a href="?page=shop-single"><?= ucfirst($m->nom) ?></a></h3>
            <p class="price"><?= $m->prix ?>FCFA</p>
            <p><a href="" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Ajouter au panier</a></p>

          </div>
      <?php endforeach; ?>  
    </div>