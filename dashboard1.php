<?php
/*menu*/
$active=1;
require('menu2.php');

?>
<style>

  .dashboard {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Taille minimale des colonnes réduite */
    grid-gap: 20px; /* Espace entre les cartes ajusté */
  }
  
.content {
  max-width: 1200px;
  margin-left: 250px;
  padding: 20px;
  /* Add the following line */
  min-height: calc(100vh - 200px);  /* Adjust this height as needed */
  box-sizing: border-box;
}
  .card {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); /* Couleurs bg-primary */
    color: #fff;
    border-radius: 10px; /* Ajustement du rayon de la bordure */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ajustement de l'ombre de la boîte */
    padding: 20px 15px; /* Réduction de l'espace de remplissage */
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Ajustement de l'ombre au survol */
  }

  .card i {
    font-size: 30px; /* Taille de l'icône ajustée */
    margin-bottom: 10px; /* Réduction de l'espace sous l'icône */
    color: #fff;
  }

  .card h3 {
    font-size: 1.2em; /* Taille de la police pour le titre ajustée */
    margin: 15px 0;
  }

  .card p {
    font-size: 1.2em; /* Taille de la police pour le texte ajustée */
    margin: 0;
  }

  .chart-container {
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-top: 20px;
  }
  footer {
  padding: 20px;
  color: #000;
  text-align: center;
  margin-top: 40px;
  position: relative;
  bottom: 0;
  width: 100%;
  /* Assurez-vous que la couleur de fond du footer le rend visible */
}
  footer img {
    margin: 20px 0;
  }
  footer .small {
    color: #000;
  }
</style>
<div class="pagetitle">
      <h4 class="display-6">Dashboard</h4>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
  <div class="dashboard">
    <div class="card">
      <i class="fas fa-user"></i>
      <h3>Utilisateurs</h3>
      <p id="userCount">100</p>
    </div>
    <div class="card">
      <i class="fas fa-file-alt"></i>
      <h3>Professours</h3>
      <p id="devoirCount">50</p>
    </div>
    <div class="card">
      <i class="fas fa-edit"></i>
      <h3>Etudiants</h3>
      <p id="examCount">20</p>
    </div>
    <div class="card">
      <i class="fas fa-school"></i>
      <h3>Matières</h3>
      <p id="schoolCount">10</p>
    </div>
  </div>
  <!---------chart--->
  <div class="row">
    <div class="col-md-6">
      <div class="chart-container">
        <canvas id="productChart"></canvas>
      </div>
    </div>
    <div class="col-md-6">
      <div class="chart-container">
        <canvas id="paymentChart"></canvas>
      </div>
    </div>
  </div>
  <footer id="footer" class="footer">
    <div class="copyright text-center">
      © Copyright <strong><span>Edutasker</span></strong>. Tout droit réservé.
    </div>
    <center>
      <img src="/edutasker/images/logo.png" width="20%">
      <p class="small mb-0"><span class="small">Un produit de <a href="https://supingenierie.com/">Edutasker</a>
        <br>Version 1.0 - 2019-2024</span></p>
    </center>
  </footer>
  </div>
<!-- Inclusion de Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Data from the `produit` table
  const products = [
    { idproduit: 1, nomproduit: 'Lunettes de vente', marque: 'Ray-Bar', prixdevente: 120 },
    { idproduit: 2, nomproduit: 'ayoub', marque: 'boss', prixdevente: 4500 }
  ];

  // Data from the `paiement` table
  const payments = [
    { idpaiement: 1, datepaiement: '2018-08-18', montantpaye: 400 },
    { idpaiement: 2, datepaiement: '2024-04-06', montantpaye: 300 },
    { idpaiement: 3, datepaiement: '2024-04-10', montantpaye: 400 }
  ];

  // Extracting data for the product chart
  const productNames = products.map(product => product.nomproduit);
  const productPrices = products.map(product => product.prixdevente);

  // Extracting data for the payment chart
  const paymentDates = payments.map(payment => payment.datepaiement);
  const paymentAmounts = payments.map(payment => payment.montantpaye);

  // Creating the product chart
  const ctxProduct = document.getElementById('productChart').getContext('2d');
  const productChart = new Chart(ctxProduct, {
    type: 'line',
    data: {
      labels: productNames,
      datasets: [{
        label: 'Prix de vente',
        data: productPrices,
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
      },
      plugins: {
        title: {
          display: true,
          text: 'Etudiant'
        }
      }
    }
  });

  // Creating the payment chart
  const ctxPayment = document.getElementById('paymentChart').getContext('2d');
  const paymentChart = new Chart(ctxPayment, {
    type: 'bar',
    data: {
      labels: paymentDates,
      datasets: [{
        label: 'Montant payé',
        data: paymentAmounts,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1,
        fill: true,
        tension: 0.1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        title: {
          display: true,
          text: 'Paiements'
        }
      }
    }
  });
</script>
</body>
</html>