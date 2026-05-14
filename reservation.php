<?php require_once 'includes/header.php'; ?>
<body>
   <section class="page-banner">
            <div class="banner-content">
                <h1>Reservation</h1>
                <p>N'attendez plus! Reservez cotre chambre des aujourd'hui et profitez de services de qualite .</p>
            </div>
        </section> 
   
<main>
    <main>
  <section class="py-1 bg-light" id="reservation">
    <div class="container">
      
      <div class="row justify-content-center">
        <div class="col-lg-8">

          <form class="p-4 bg-white shadow rounded">
            
            <!-- Nom -->
            <div class="mb-3">
              <label for="nom" class="form-label">Nom complet</label>
              <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" placeholder="exemple@mail.com" required>
            </div>

            <!-- Téléphone -->
            <div class="mb-3">
              <label for="telephone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="telephone" placeholder="+509 3465 5678" required>
            </div>

            <!-- Dates -->
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="dateArrivee" class="form-label">Date d’arrivée</label>
                <input type="date" class="form-control" id="dateArrivee" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="dateDepart" class="form-label">Date de départ</label>
                <input type="date" class="form-control" id="dateDepart" required>
              </div>
            </div>

            <!-- Type de chambre -->
            <div class="mb-3">
              <label for="chambre" class="form-label">Type de chambre</label>
              <select class="form-select" id="chambre" required>
                <option value="">Choisissez...</option>
                <option value="standard">Chambre Standard</option>
                <option value="deluxe">Chambre Deluxe</option>
                <option value="suite">Suite Prestige</option>
              </select>
            </div>

            <!-- Nombre de personnes -->
            <div class="mb-3">
              <label for="personnes" class="form-label">Nombre de personnes</label>
              <input type="number" class="form-control" id="personnes" min="1" max="6" required>
            </div>

            <!-- Message -->
            <div class="mb-3">
              <label for="message" class="form-label">Message / Demandes spéciales</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Ex: régime alimentaire, préférences..."></textarea>
            </div>

            <!-- Bouton -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-5">Réserver</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </section>
</main>
</main>
</body>

<footer class="bg-dark text-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      
      <!-- Colonne 1 : Branding -->
      <div class="col-md-4 mb-4">
        <h4 class="fw-bold">Olymax Hôtel</h4>
        <p>
          Élégance moderne et raffinement intemporel au cœur des Cayes.
          Votre destination cinq étoiles pour un séjour inoubliable.
        </p>
      </div>
      
      <!-- Colonne 2 : Liens rapides -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Liens rapides</h5>
        <ul class="list-unstyled">
          <li><a href="index.html" class="text-light text-decoration-none">Accueil</a></li>
          <li><a href="chambre.html" class="text-light text-decoration-none">Chambres</a></li>
          <li><a href="service.html" class="text-light text-decoration-none">Services</a></li>
          <li><a href="galerie.html" class="text-light text-decoration-none">Galerie</a></li>
          <li><a href="contact.html" class="text-light text-decoration-none">Contact</a></li>
        </ul>
      </div>
      
      <!-- Colonne 3 : Contact -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Contact</h5>
        <p><i class="bi bi-geo-alt-fill me-2"></i> Les Cayes, Haïti</p>
        <p><i class="bi bi-telephone-fill me-2"></i> +509 34 567843</p>
        <p><i class="bi bi-envelope-fill me-2"></i> olymaxhotel@gmail.com</p>

        
        <!-- Réseaux sociaux -->
        <div class="mt-3">
          <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-4">Facebook</i></a>
          <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-4">Instagram</i></a>
          <a href="#" class="text-light"><i class="bi bi-twitter fs-4"></i>twiter</a>
        </div>
      </div>
      
    </div>
    
    <!-- Ligne du bas -->
    <div class="text-center mt-4 border-top pt-3">
      <p class="mb-0">&copy; 2026 Olymax Hôtel. Tous droits réservés.</p>
    </div>
  </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>

</html>