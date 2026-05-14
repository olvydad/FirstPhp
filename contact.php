<?php require_once 'includes/header.php'; ?>
<body>
  <section class="page-banner">
            <div class="banner-content">
                <h1>Contact</h1>
                <p>Contactez-nous pour toute question ou information sur votre sejour. Nous sommes a votre ecoute</p>.</p>
            </div>
        </section>
   
<main>
  <section class="py-5 bg-light" id="contact">
    <div class="container">
      <h2 class="fw-bold text-center mb-5">Contactez-nous</h2>
      <div class="row">
        
        <!-- Informations de contact -->
        <div class="col-lg-7 mb-4">
          <h5 class="fw-bold">Olymax Hôtel</h5>
          <p><i class="bi bi-geo-alt-fill me-2"></i> Les Cayes, Haïti</p>
          <p><i class="bi bi-telephone-fill me-2"></i> +509 1234 5678</p>
          <p><i class="bi bi-envelope-fill me-2"></i> olymaxhotel@gmail.com</p>
          
          <h6 class="fw-bold mt-4">Suivez-nous</h6>
          <a href="#" class="text-dark me-3"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-twitter fs-4"></i></a>
        </div>
        
        <!-- Formulaire de contact -->
        <div class="col-lg-7">
          <form class="p-4 bg-white shadow rounded">
            
            <!-- Nom -->
            <div class="mb-3">
              <label for="nom" class="form-label">Nom complet</label>
              <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
            </div>
            
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" placeholder="exemple@mail.com" required>
            </div>
            
            <!-- Sujet -->
            <div class="mb-3">
              <label for="sujet" class="form-label">Sujet</label>
              <input type="text" class="form-control" id="sujet" placeholder="Sujet de votre message" required>
            </div>
            
            <!-- Message -->
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Écrivez votre message ici..." required></textarea>
            </div>
            
            <!-- Bouton -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-5">Envoyer</button>
            </div>
            
          </form>
        </div>
        
      </div>
    </div>
  </section>
</main>
</body>
<?php require_once 'includes/footer.php'; ?>
<script src="js/bootstrap.bundle.min.js"></script>

</html>