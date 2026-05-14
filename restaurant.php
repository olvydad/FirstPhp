
<?php require_once 'includes/header.php'; ?>
<body>
    <section class="page-banner">
        <div class="banner-content">
            <h1>Restaurant</h1>
            <p>Decouvrez nos restaurants et profitez de delicieux plats prepares avec soins.</p>
             <a class="btn btn-outline-light" href="Commande.html">Voir le commande</a>
        </div>
    </section>
   
    <main id="restaurant">



              <section id="galerie" class="container my-1">
  <div class="row g-4">

    <!-- Carte 1 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/maje1.jpg" class="card-img-top" alt="bannann ak pwason"
             data-bs-toggle="modal" data-bs-target="#imgModal1">
        <div class="card-body">
          <h5 class="card-title">bannann ak pwason</h5>
          
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="bannann ak pwason"
                  data-price="1250">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 2 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/manje2.jpg" class="card-img-top" alt="legim krab"
             data-bs-toggle="modal" data-bs-target="#imgModal2">
        <div class="card-body">
          <h5 class="card-title">legim krab</h5>
          
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="legim krab"
                  data-price="2000">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 3 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/manje3.jpg" class="card-img-top" alt="diri salad vejetaryen"
             data-bs-toggle="modal" data-bs-target="#imgModal3">
        <div class="card-body">
          <h5 class="card-title">Diri ak salad</h5>
         
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="drir ak salad"
                  data-price="2000">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 4 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/pate1.jpg" class="card-img-top" alt="pate aran"
             data-bs-toggle="modal" data-bs-target="#imgModal4">
        <div class="card-body">
          <h5 class="card-title">pate aran</h5>
          
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="pate aran"
                  data-price="250">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 5 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/griyot cabrit.jpg" class="card-img-top" alt="griyot kabrit"
             data-bs-toggle="modal" data-bs-target="#imgModal5">
        <div class="card-body">
          <h5 class="card-title">Griyo kabrit</h5>
          
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="Griyo kabrit"
                  data-price="2500">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 6 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/salde ecrevis.jpg" class="card-img-top" alt="salad ekrevis"
             data-bs-toggle="modal" data-bs-target="#imgModal6">
        <div class="card-body">
          <h5 class="card-title">Salad ekrevis</h5>
          
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="Salad ekrevis"
                  data-price="2200">Commande</button>
        </div>
      </div>
    </div>

  </div>

  <!-- Modals -->
  <div class="modal fade" id="imgModal1" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/maje1.jpg" class="img-fluid" alt="manje Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/manje2.jpg" class="img-fluid" alt="Manje Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal3" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/manje3.jpg" class="img-fluid" alt="manje Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal4" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/pate1.jpg" class="img-fluid" alt="manje Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal5" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/griyot cabrit.jpg" class="img-fluid" alt="manje Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal6" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/salde ecrevis.jpg" class="img-fluid" alt="manje Olymax">
      </div>
    </div>
  </div>
</section>
        <!--section jus-->

        <section id="galerie" class="container my-5">
  <div class="row g-4">

    <!-- Carte 1 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/Screenshot_20260311_144204_Chrome.jpg" class="card-img-top" alt="ji-grenadia"
             data-bs-toggle="modal" data-bs-target="#imgModal7">
        <div class="card-body">
          <h5 class="card-title">Ji Grenadia</h5>
          <p class="card-text">Un jus exotique aux saveurs fraîches et acidulées.</p>
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="ji grenadia"
                  data-price="250">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 2 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/Screenshot_20260311_143318_Chrome.jpg" class="card-img-top" alt="jus de mangue"
             data-bs-toggle="modal" data-bs-target="#imgModal8">
        <div class="card-body">
          <h5 class="card-title">Jus Mangue</h5>
          <p class="card-text">Un jus tropical rafraîchissant à base de mangue.</p>
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="jus-corossol"
                  data-price="200">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 3 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/ji-chadek-768x701.png" class="card-img-top" alt="ji-chadek"
             data-bs-toggle="modal" data-bs-target="#imgModal9">
        <div class="card-body">
          <h5 class="card-title">Ji Chadek</h5>
          <p class="card-text">Un jus doux et parfumé à base de chadek.</p>
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="ji-chadek"
                  data-price="150">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 4 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/Screenshot_20260311_143140_Chrome.jpg" class="card-img-top" alt="ji-papay"
             data-bs-toggle="modal" data-bs-target="#imgModal10">
        <div class="card-body">
          <h5 class="card-title">Ji Papay</h5>
          <p class="card-text">Un jus sucré et parfumé à base de papaye.</p>
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="ji-papay"
                  data-price="250">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 5 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/jus fraise.jpg" class="card-img-top" alt="ji fraise"
             data-bs-toggle="modal" data-bs-target="#imgModal11">
        <div class="card-body">
          <h5 class="card-title">Ji fraise</h5>
          <p class="card-text">Un jus riche et savoureux à base de fraise.</p>
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="ji pome"
                  data-price="350">Commande</button>
        </div>
      </div>
    </div>

    <!-- Carte 6 -->
    <div class="col-md-4">
      <div class="card h-100">
        <img src="image/OIP (7).jpg" class="card-img-top" alt="ji melanj"
             data-bs-toggle="modal" data-bs-target="#imgModal12">
        <div class="card-body">
          <h5 class="card-title">Ji Melanj</h5>
          <p class="card-text">Un mélange tropical aux saveurs variées.</p>
          <button class="btn btn-success w-100 add-to-cart"
                  data-name="ji melanje"
                  data-price="250">Commande</button>
        </div>
      </div>
    </div>

  </div>

  <!-- Modals -->
  <div class="modal fade" id="imgModal7" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/Screenshot_20260311_144204_Chrome.jpg" class="img-fluid" alt="Ji Grenadia Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal8" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/Screenshot_20260311_143318_Chrome.jpg" class="img-fluid" alt="Jus Mangue Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal9" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/ji-chadek-768x701.png" class="img-fluid" alt="Ji Chadek Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal10" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/Screenshot_20260311_143140_Chrome.jpg" class="img-fluid" alt="Ji Papay Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal11" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/jus fraise.jpg" class="img-fluid" alt="Ji fraise Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal12" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/OIP (7).jpg" class="img-fluid" alt="Ji Melanj Olymax">
      </div>
    </div>
  </div>
</section>


    </main>
</body>
<?php require_once 'includes/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  // Fonction pour ajouter au panier
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
      const name = button.dataset.name;
      const price = parseInt(button.dataset.price);

      // Récupérer panier existant
      let cart = JSON.parse(localStorage.getItem('cart')) || [];

      // Vérifier si produit déjà présent
      const existing = cart.find(item => item.name === name);
      if (existing) {
        existing.quantity += 1;
      } else {
        cart.push({ name, price, quantity: 1 });
      }

      // Sauvegarder panier
      localStorage.setItem('cart', JSON.stringify(cart));

      alert(name + " ajouté au panier !");
    });
  });
</script>
</html>