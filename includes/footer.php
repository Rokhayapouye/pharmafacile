<div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4"> <?php echo 'Oumar.Dev &copy; 2023 - '.date('Y').'. Tous droits réservés.'; ?> <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"
            class="pe-1 text-primary text-decoration-underline"></a></p>
</div>



<!-- JS Libraries -->
<script src="assets/themes/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/themes/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/themes/js/sidebarmenu.js"></script>
<script src="assets/themes/js/app.min.js"></script>
<script src="assets/themes/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="assets/themes/libs/simplebar/dist/simplebar.js"></script>
<script src="assets/themes/js/dashboard.js"></script>
<script src="assets/themes/libs/feather-icons/dist/feather.min.js"></script>

<!-- Correct link tag for Toastr CSS -->
<!-- Lien CDN pour Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- message Mensuel -->
<script>
  var ctx = document.getElementById('myPieChart').getContext('2d');
  var myPieChart = new Chart(ctx, {
    type: 'pie', // Type de graphique : cercle
    data: {
      labels: ['novembre', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ], // Étiquettes pour les segments
      datasets: [{
        label: 'Répartition des couleurs',
        data: [300, 50, 100, 300, 500, 250, 100, 300, 500, 250, 300, 500], // Valeurs des segments
        backgroundColor: ['red', 'blue', 'yellow', 'vert', 'orange', 'violet', 'bleu', 'rose', 'marron', 'cyan', 'magenta', 'rose'], // Couleurs des segments
        borderColor: ['white', 'white', 'white'], // Couleur des bords
        borderWidth: 1
      }]
    }
  });
</script>


<!-- les ventes par mois -->
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar', // Type de diagramme (barres)
    data: {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'], // Labels
      datasets: [{
        label: 'Nombre de Ventes',
        data: [12, 19, 3, 5, 2, 3, 10, 5, 10, 7, 12, 6], // Données
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>







<script>

toastr.options = {
    "closeButton": true,       // Ajouter un bouton de fermeture
    "progressBar": true,       // Afficher une barre de progression
    "positionClass": "toast-top-right",  // Positionner le toast en haut à droite
    "timeOut": "5000",         // Durée du toast (5 secondes)
    "extendedTimeOut": "1000"  // Durée du toast lorsque la souris est au-dessus
};

    // Vérifier si une session contient un message Toast
    <?php if (isset($_SESSION['toast_message'])): ?>
        // Afficher le toast avec Toastr
        var toastType = '<?php echo $_SESSION['toast_type']; ?>'; // Type du toast: success ou error
        var toastMessage = '<?php echo $_SESSION['toast_message']; ?>'; // Le message

        // Afficher le toast
        if (toastType == 'success') {
            toastr.success(toastMessage); // Message de succès
        } else {
            toastr.error(toastMessage); // Message d'erreur
        }

        // Supprimer les messages de la session après affichage
        <?php unset($_SESSION['toast_message']); ?>
        <?php unset($_SESSION['toast_type']); ?>
    <?php endif; ?>
</script>

</body>

</html>
