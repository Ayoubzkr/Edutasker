<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des Écoles</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-image: linear-gradient(30deg, #0048bd, #44a7fd);
      padding-top: 20px;
      position: fixed;
      transition: all 0.3s ease;
      color: #fff;
      overflow: hidden;
      border-top-right-radius: 80px;
    }
    .sidebar .logo {
      text-align: center;
      margin-bottom: 20px;
    }
    .sidebar .logo img {
      width: 150px;
    }
    .sidebar a, .dropdown-btn {
      padding: 12px 30px;
      text-decoration: none;
      font-size: 15px;
      color: #fff;
      display: flex;
      align-items: center;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      border-radius: 0 20px 20px 0;
      transition: all 0.3s ease;
    }
    .sidebar a:hover {
      color: #3f5efb;
      background: #fff;
    }
    .sidebar a i {
      margin-right: 10px;
    }
    .dropdown-container {
      display: none;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    .dropdown-container a {
      padding: 10px 40px;
    }
    .dropdown-active {
      display: block;
    }
    .dropdown-btn {
      cursor: pointer;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
      width: calc(100% - 250px);
      transition: margin-left 0.3s ease, width 0.3s ease;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <div class="logo">
      <img src="/edutasker/images/logo.png" alt="Logo">
    </div>
    <a href="/edutasker/dashboard.php"><i class="fas fa-home"></i> Tableau de bord</a>
    
    <a class="dropdown-btn" onclick="toggleDropdown('ecoles')"><i class="fas fa-school"></i> Gestion des Écoles 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="ecoles" class="dropdown-container">
      <a href="/edutasker/gestion/ajouter_ecole.php"><i class="fas fa-plus-circle"></i> Ajouter une école</a>
      <a href="/edutasker/gestion/voir_les_ecoles.php"><i class="fas fa-eye"></i> Voir les écoles</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('professeurs')"><i class="fas fa-chalkboard-teacher"></i> Gestion des Professeurs 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="professeurs" class="dropdown-container">
      <a href="/edutasker/gestion/ajouter_professeur.php"><i class="fas fa-user-plus"></i> Ajouter un professeur</a>
      <a href="/edutasker/gestion/voir_les_professeurs.php"><i class="fas fa-eye"></i> Voir les professeurs</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('etudiants')"><i class="fas fa-user-graduate"></i> Gestion des Étudiants 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="etudiants" class="dropdown-container">
      <a href="/edutasker/gestion/ajouter_etudiant.php"><i class="fas fa-user-plus"></i> Ajouter un étudiant</a>
      <a href="/edutasker/gestion/voir_les_etudiants.php"><i class="fas fa-eye"></i> Voir les étudiants</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('cours')"><i class="fas fa-book"></i> Gestion des Cours 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="cours" class="dropdown-container">
      <a href="/edutasker/gestion/ajouter_cours.php"><i class="fas fa-plus-circle"></i> Ajouter un cours</a>
      <a href="/edutasker/gestion/voir_les_cours.php"><i class="fas fa-eye"></i> Voir les cours</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('rapport')"><i class="fas fa-chart-bar"></i> Rapport 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="rapport" class="dropdown-container">
      <a href="/edutasker/rapport/statistiques_ecoles.php"><i class="fas fa-chart-pie"></i> Statistiques des écoles</a>
      <a href="/edutasker/rapport/performance_professeurs.php"><i class="fas fa-chart-line"></i> Performance des professeurs</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('parametres')"><i class="fas fa-cogs"></i> Paramètres 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="parametres" class="dropdown-container">
      <a href="/edutasker/parametres/gestion_utilisateurs.php"><i class="fas fa-user-cog"></i> Gestion des utilisateurs</a>
      <a href="/edutasker/parametres/configuration_application.php"><i class="fas fa-cog"></i> Configuration de l'application</a>
    </div>
    
    <a href="/edutasker/logout.php" style="background-color: #f44336; color: #fff; border-radius: 0 20px 20px 0;"><i class="fas fa-sign-out-alt"></i> Quitter</a>
  </div>

  <div class="content">
    <!-- Contenu principal ici -->
  </div>

  <script>
    function toggleDropdown(id) {
      var dropdownContent = document.getElementById(id);
      dropdownContent.classList.toggle('dropdown-active');
    }
  </script>
</body>
</html>
