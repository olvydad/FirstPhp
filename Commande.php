<?php require_once 'includes/header.php'; ?>
<body>
    
    <main>
       <section class="page-banner">
            <div class="banner-content">
                <h1>Commande</h1>
                
            </div>
        </section>
  <div class="container mt-5">
 
    


    <div class="table-responsive">
      <table class="table table-striped table-bordered text-center">
        <thead class="table-dark">
          <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix unitaire (HTG)</th>
            <th>Total (HTG)</th>
          </tr>
        </thead>
        <tbody id="cart-body"></tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="fw-bold text-end">Total général :</td>
            <td id="cart-total" class="fw-bold">0 HTG</td>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="d-flex justify-content-center gap-3 my-4">
  <button id="clear-cart" class="btn btn-danger">Annuler commande</button>
  <button id="remove-item" class="btn btn-warning">Retirer un produit</button>
</div>

    <div class="d-grid gap-2 mt-4">
      <button class="btn btn-success btn-lg">Payer</button>
    </div>
  </div>

    </main>

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
<script>
  // Bouton "Procéder au paiement"
  document.querySelector(".btn-success").addEventListener("click", () => {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    if (cart.length === 0) {
      alert("Votre panier est vide. Ajoutez des produits avant de payer.");
      return;
    }

    // Calcul du total
    let totalGeneral = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);

    // Demande de confirmation
    if (confirm("Confirmez-vous le paiement de " + totalGeneral + " HTG ?")) {
      // Ici tu pourrais intégrer une API réelle (Stripe, PayPal, etc.)
      alert("✅ Paiement effectué avec succès ! Merci pour votre achat.");

      // Vider le panier après paiement
      localStorage.removeItem("cart");
      renderCart();

      // Redirection vers une page de confirmation
      window.location.href = "confirmation.html";
    }
  });
</script>
  <script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', () => {
    const name = button.dataset.name;
    const price = parseInt(button.dataset.price);

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const existing = cart.find(item => item.name === name);
    if (existing) {
      existing.quantity += 1;
    } else {
      cart.push({ name, price, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert(name + " ajouté au panier !");
  });
});
    const cartBody = document.getElementById('cart-body');
    const cartTotal = document.getElementById('cart-total');
    let totalGeneral = 0;

    // Charger panier depuis localStorage
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cart.forEach(item => {
      const total = item.price * item.quantity;
      totalGeneral += total;

      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.name}</td>
        <td>${item.quantity}</td>
        <td>${item.price} HTG</td>
        <td>${total} HTG</td>
      `;
      cartBody.appendChild(row);
    });

    cartTotal.textContent = totalGeneral + " HTG";

    // Vider le panier
  document.getElementById('clear-cart').addEventListener('click', () => {
    localStorage.removeItem('cart');
    alert("Panier vidé !");
  });

  // Retirer un produit (demande le nom du produit)
  document.getElementById('remove-item').addEventListener('click', () => {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length === 0) {
      alert("Votre panier est vide.");
      return;
    }

    const productName = prompt("Entrez le nom du produit à retirer :");
    if (!productName) return;

    cart = cart.filter(item => item.name.toLowerCase() !== productName.toLowerCase());

    localStorage.setItem('cart', JSON.stringify(cart));
    alert("Produit retiré du panier (si présent).");
  });
  

    // Fonction pour afficher le panier
  function renderCart() {
    cartBody.innerHTML = "";
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let totalGeneral = 0;

    cart.forEach((item, index) => {
      const total = item.price * item.quantity;
      totalGeneral += total;

      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${item.name}</td>
        <td>${item.quantity}</td>
        <td>${item.price} HTG</td>
        <td>${total} HTG</td>
        <td>
          <button class="btn btn-warning btn-sm remove-item" data-index="${index}">
            Retirer
          </button>
        </td>
      `;
      cartBody.appendChild(row);
    });

    cartTotal.textContent = totalGeneral + " HTG";

    // Ajouter les événements "Retirer"
    document.querySelectorAll('.remove-item').forEach(button => {
      button.addEventListener('click', () => {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const index = button.dataset.index;
        cart.splice(index, 1); // Supprime le produit
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart(); // Réaffiche instantanément
      });
    });
  }

  // Vider le panier
  document.getElementById('clear-cart').addEventListener('click', () => {
    localStorage.removeItem('cart');
    renderCart();
    alert("Panier vidé !");
  });

  // Afficher au chargement
  renderCart();


  </script>
   <script src="js/bootstrap.bundle.min.js"></script>
</body>
<?php require_once 'includes/footer.php'; ?>
</html>