<?php require_once 'includes/header.php'; ?>

<body  class="pt-5">

    <main>

       <section class="py-5 bg-light" id="presentation" style="padding-top: 100px;">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Colonne gauche : image -->
      <div class="col-md-6 mb-4 mb-md-0 ">
        <figure class="text-center">
          <img src="image/Logo complexe Olymax.png" style="max-height: 250px;" class="img-fluid rounded shadow mb-3" alt="Logo de l'hôtel Olymax">
          <figcaption>
            <h2 class="fw-bold mb-3">Bienvenue à l'Hôtel Olymax</h2>
          </figcaption>
        </figure>
      </div>
      
      <!-- Colonne droite : texte -->
      <div class="col-md-6">
        <p class="lead">
          Symbole d’élégance moderne et de raffinement intemporel, l’Hôtel Olymax incarne
          l’alliance parfaite entre confort contemporain et héritage architectural.
        </p>
        <p>
          Inauguré au cœur de la ville des Cayes, Olymax offre une atmosphère unique où design sophistiqué
          et hospitalité chaleureuse se rencontrent. Avec ses suites luxueuses, son spa exclusif
          et son restaurant gastronomique, il propose une expérience cinq étoiles qui séduit
          voyageurs d’affaires comme amateurs de séjours inoubliables.
        </p>
        <p class="fw-semibold">
          Un héritage moderne au service de votre bien-être.
        </p>
        <a href="service.html" class="btn btn-primary btn-lg">Découvrir nos services</a>
      </div>
      
    </div>
  </div>
</section>
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/olymax.png" class="d-block w-100 vh-100 object-fit-cover" alt="grande vue">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                            <h1 class="display-3 fw-bold">Bienvenue a Olymax</h1>
                        </div>
                    </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/bloc-02.jpg" class="d-block w-100 vh-100 object-fit-cover" alt="grande vue">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                            <h1 class="display-3 fw-bold">Relaxez-vous dans notre spa</h1>
                            <p class="lead">Un séjour de luxe et de confort</p>
                            <a href="spa.html" class="btn btn-primary btn-lg">Tous les services disponibles</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="image/HERO-PICTURE.jpg" class="d-block w-100 vh-100 object-fit-cover"
                            alt="Vue immersive">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                            <h1 class="display-3 fw-bold">Découvrez nos suites premium</h1>
                            <p class="lead">Confort et élégance au rendez-vous</p>
                            <a href="chambres.html" class="btn btn-light btn-lg">Voir les chambres</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/jardinhiver_bloctea.jpg" class="d-block w-100 vh-100 object-fit-cover"
                            alt="Jardin d'hiver">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                            <h1 class="display-3 fw-bold">Relaxez-vous avec de bon plat</h1>
                            <p class="lead">Un espace bien-être unique</p>
                            <a href="restaurant.html" class="btn btn-success btn-lg">Découvrir nos services</a>
                        </div>
                    </div>
                </div>

                <!-- Boutons de navigation -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>





            <div class="container my-5" id="galerie">
                <h2 class="text-center fw-bold mb-4">Nos offres</h2>
                <div class="row gx-4">
                    <!-- Chambre  -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <img src="image/2B.jpg" class="card-img-top" alt="Suite Deluxe"
                            data-bs-toggle="modal" data-bs-target="#imgModal3">
                            <div class="card-body">
                                <h5 class="card-title">Suite Deluxe</h5>
                                <p class="card-text">
                                    Profitez d’un confort exceptionnel avec vue sur la mer, lit king-size et salle de
                                    bain moderne.
                                </p>
                                <a href="chambre.html" class="btn btn-primary">Voir plus</a>
                            </div>
                            <div class="modal fade" id="imgModal3" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <img src="image/2B.jpg" class="img-fluid" alt="Spa Olymax">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

                    <!-- Spa -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <img src="image/bloc-01.jpg" class="card-img-top" alt="Chambre Standard"
                            data-bs-toggle="modal" data-bs-target="#imgModal2">
                            <div class="card-body">
                                <h5 class="card-title">Spa</h5>
                                <p class="card-text">
                                    Idéale pour un séjour pratique et confortable, équipée de Wi-Fi gratuit et
                                    climatisation.
                                </p>
                                <a href="spa.html" class="btn btn-primary">Voir plus</a>
                            </div>
                            <div class="modal fade" id="imgModal2" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <img src="image/bloc-01.jpg" class="img-fluid" alt="Spa Olymax">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

                    <!-- Restaurant -->
                    <div class="col-md-4 mb-4">
                        <div class="card shadow h-100">
                            <img src="image/Blue-Sunday.jpg" class="card-img-top" alt="Suite Premium"
                            data-bs-toggle="modal" data-bs-target="#imgModal1">
                            <div class="card-body">
                                <h5 class="card-title">Restaurant</h5>
                                <p class="card-text">
                                    Une expérience haut de gamme avec les plats les plus savoureux, minibar .
                                </p>
                                <a href="restaurant.html" class="btn btn-primary">Voir plus</a>
                            </div>
                            <div class="modal fade" id="imgModal1" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <img src="image/Blue-Sunday.jpg" class="img-fluid" alt="Spa Olymax">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
<section class="py-5 bg-light" class="Témoignage">
  <div class="container">
    <h2 class="text-center mb-4">Témoignages</h2>
    <div class="row">
      <!-- Témoignage 1 -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">
              “Un séjour inoubliable ! L’accueil était chaleureux et les chambres très confortables.”
            </p>
            <h6 class="card-subtitle text-muted mt-3">— Marie.Des Cotes-de-fer</h6>
          </div>
        </div>
      </div>
      <!-- Témoignage 2 -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">
              “Un endroit magnifique pour se détendre. La vue est splendide et le service impeccable.”
            </p>
            <h6 class="card-subtitle text-muted mt-3">— Jean.De Port-Salut</h6>
          </div>
        </div>
      </div>
      <!-- Témoignage 3 -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4" >
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <p class="card-text">
              “Nous avons adoré notre séjour. L’ambiance est conviviale et tout est pensé pour le confort.”
            </p>
            <h6 class="card-subtitle text-muted mt-3">— Sophie.Des Cayes</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</section>
    </main>
</body>


<?php require_once 'includes/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"></script>

</html>