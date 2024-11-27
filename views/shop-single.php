
  

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?= ucfirst($m->nom)  ?></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="images/<?= $m->image ?>" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?= ucfirst($m->nom)  ?></h2>
            <p><?= nl2br($m->description) ?>.</p>
            

            <p><strong class="text-primary h4"><?= $m->prix ?> FCFA</strong></p>

            
            <form action="" method="post">
              <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 220px;">
                  <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                  </div>
                  <input type="text" class="form-control text-center" value="1" placeholder=""
                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                  <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                  </div>
                </div>
            </div>
            <p><a href="?page=panier" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Ajouter au panier</a></p>
            </form>

          </div>
        </div>
      </div>
      <?php if(count($medocs) > 0): ?>
      <div class="container mt-3">

      <h1 class="text-center">Medicaments similaires</h1>
      <div class="row">
        <?php foreach($medocs as $key =>$me): ?>
          <?php if($key < 3): ?>
            <div class="col-sm-6 col-lg-4 text-center item mb-4 item-v2">
              
              <a href="?page=shop-single"> <img src="images/<?= $me->image ?>" alt="Image"></a>
              <h3 class="text-dark"><a href="?page=shop-single"><?= $me->nom ?></a></h3>
              <p class="price"><?= $me->prix ?>FCFA</p>
              <p><a href="" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Ajouter au panier</a></p>

            </div>
          <?php endif; ?>  
        <?php endforeach; ?>  
      </div>

      </div>
      <?php endif; ?>
    </div>

    