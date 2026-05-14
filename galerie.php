<?php require_once 'includes/header.php'; ?>

<body>
  <section class="page-banner">
            <div class="banner-content">
                <h1>Galerie</h1>
                <p>Parcourez notre galerie et laissez-vous seduire par le charme et le confort de notre hotel.</p>
            </div>
        </section>

   <main class="m">
  <section class="py-1 bg-light " id="galerie">
    <div class="container">
      
      <div class="row g-4">

        <!-- Image 1 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/bloc-02.jpg" class="img-fluid rounded shadow-sm"
               alt="Spa Olymax" data-bs-toggle="modal" data-bs-target="#imgModal1">
        </div>

        <!-- Image 2 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/OIP (1).jpg" class="img-fluid rounded shadow-sm"
               alt="Piscine Olymax" data-bs-toggle="modal" data-bs-target="#imgModal2">
        </div>

        <!-- Image 3 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/sal spo10.png" class="img-fluid rounded shadow-sm"
               alt="Salle de sport Olymax" data-bs-toggle="modal" data-bs-target="#imgModal3">
        </div>

        <!-- Image 4 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/sal spo1.png" class="img-fluid rounded shadow-sm"
               alt="sallle de sport Olymax" data-bs-toggle="modal" data-bs-target="#imgModal4">
        </div>

        <!-- Image 5 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/plat complet.webp" class="img-fluid rounded shadow-sm"
               alt="Restaurant Olymax" data-bs-toggle="modal" data-bs-target="#imgModal5">
        </div>

        <!-- Image 6 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/3A.jpg" class="img-fluid rounded shadow-sm"
               alt="Chambre Deluxe Olymax" data-bs-toggle="modal" data-bs-target="#imgModal6">
        </div>

        <!-- Image 7 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/8C.jpg" class="img-fluid rounded shadow-sm"
               alt="Suite Prestige Olymax" data-bs-toggle="modal" data-bs-target="#imgModal7">
        </div>

        <!-- Image 8 -->
        <div class="col-sm-6 col-md-6 col-lg-6">
          <img src="image/1C.jpg" class="img-fluid rounded shadow-sm"
               alt="Chambre Standard Olymax" data-bs-toggle="modal" data-bs-target="#imgModal8">
        </div>

      </div>
    </div>
  </section>

  <!-- Modals -->
  <div class="modal fade" id="imgModal1" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/bloc-02.jpg" class="img-fluid" alt="Spa Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/OIP (1).jpg" class="img-fluid" alt="Piscine Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal3" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/OIP2.webp" class="img-fluid" alt="Salle de sport Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal4" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="images/wifi.jpg" class="img-fluid" alt="Wi-Fi Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal5" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/plat complet.webp" class="img-fluid" alt="Restaurant Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal6" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/3A.jpg" class="img-fluid" alt="Chambre Deluxe Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal7" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/8C.jpg" class="img-fluid" alt="Suite Prestige Olymax">
      </div>
    </div>
  </div>

  <div class="modal fade" id="imgModal8" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <img src="image/1C.jpg" class="img-fluid" alt="Chambre Standard Olymax">
      </div>
    </div>
  </div>
</main>
</body>

<?php require_once 'includes/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"></script>
</html>