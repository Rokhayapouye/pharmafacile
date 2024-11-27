<div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">PharmaFacile</strong> Ouvert 24heures</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Bienvenue sur notre site de pharmacie en ligne ! Nous vous offrons un large choix de médicaments, de produits de santé et de bien-être, avec la garantie de qualité et de sécurité.</p>
                  </div>
                </div>
                
                <p><a href="?page=produits" class="btn btn-primary px-5 py-3">Acheter maintenant</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('assets/images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">L'innovation medicale <strong class="text-primary">Au quotidien</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Grâce à nos conseils professionnels et à notre service rapide, nous vous accompagnons dans votre parcours de soins, en toute confiance. Profitez de nos offres spéciales et faites vos achats en toute simplicité, depuis chez vous..</p>
                  </div>
                </div>
                <p><a href="?page=produits" class="btn btn-primary px-5 py-3">Acheter maintenant</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Livraison immédiate</a></h3>
              <p>Profitez de notre service de livraison immédiate pour vos médicaments essentiels ! Commandez en ligne et recevez votre traitement directement chez vous en un temps record. Grâce à notre réseau de distribution rapide et fiable, nous vous garantissons une prise en charge
                 rapide de vos besoins de santé, pour que vous puissiez obtenir vos médicaments au moment où vous en avez besoin.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">En savoir plus</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">L'innovation  au Quotidien</a></h3>
              <p>L'innovation en pharmacie transforme profondément notre manière d'aborder les soins au quotidien. Les avancées récentes, telles que les traitements ciblés, permettent une approche plus précise et efficace des pathologies. Les technologies comme les systèmes de gestion des prescriptions électroniques et les pharmacies connectées facilitent l'accès aux traitements et assurent un suivi optimal.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">En savoir plus</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Produits pharmaceutiques fiables</a></h3>
              <p>La fiabilité des produits pharmaceutiques proposés sur notre site est notre priorité absolue. Nous ne sélectionnons que des médicaments et des soins provenant de laboratoires reconnus, respectant les normes de qualité les plus strictes. Chaque produit est rigoureusement testé et validé par des autorités de santé pour garantir son efficacité et sa sécurité.</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">En savoir plus</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Nos Produits Conseil du mois</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              <?php foreach($medocs as $key =>$m): ?>
                <?php if($key < 8): ?>
                <div class="text-center item mb-4 item-v2">
                  <span class="onsale">Sale</span>
                  <a href="?page=shop-single&id=<?= $m->id ?>"> <img src="images/<?= $m->image ?>" alt="Image"></a>
                  <h3 class="text-dark"><a href="?page=shop-single&id=<?= $m->id ?>"><?= ucfirst($m->nom) ?></a></h3>
                  <p class="price"><?= $m->prix ?>fcfa</p>
                </div>
              <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
         <div class="col-lg-7">
           <h3 class="text-white">Nos Conseils Santé</h3>
           <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam.</p>
           <p class="mb-0"><a href="#" class="btn btn-outline-white">Sign up</a></p>
         </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="title-section">
              <h2>Avis <strong class="text-primary">Utilisateurs</strong></h2>
            </div>
            <div class="block-3 products-wrap">
            <div class="owl-single no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <p>"PharmaFacile est devenu mon site préféré pour acheter mes médicaments et produits de santé. La navigation est simple, et la livraison est toujours rapide. Je recommande vivement !</p>
                </blockquote>

                <p class="author">&mdash; Absa Diop</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <p>"J'ai trouvé tout ce dont j'avais besoin sur PharmaFacile, avec des prix très compétitifs. Le service client est réactif et m'a bien aidé à trouver des informations sur mes produits."</p>
                </blockquote>
              
                <p class="author">&mdash; Yony Gueye</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <p>Je suis ravie de ma première commande sur PharmaFacile ! Les produits sont de qualité, bien emballés, et la livraison a été rapide. Une pharmacie en ligne très fiable."</p>
                </blockquote>
              
                <p class="author">&mdash; Mamadou Ndiaye</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <p> "PharmaFacile m'a simplifié la vie. En quelques clics, j'ai pu commander mes médicaments sans sortir de chez moi. Le site est clair et sécurisé, et les délais de livraison sont respectés.</p>
                </blockquote>
              
                <p class="author">&mdash; Oumar Diaw</p>
              </div>
        
            </div>
          </div>
          </div>
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">Pourquoi <strong class="text-primary">Nous?</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>Large choix de produits: PharmaFacile propose une vaste sélection de médicaments, produits de santé et de bien-être, répondant à tous vos besoins.</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Commande facile et rapide: Grâce à une interface intuitive, profitez d'une expérience d'achat simple et fluide, avec une livraison rapide à domicile.</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>Sécurité et confidentialité: Toutes vos commandes sont traitées avec la plus grande sécurité, garantissant la confidentialité de vos informations personnelles et la qualité des produits.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>