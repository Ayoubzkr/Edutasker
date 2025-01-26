
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edutasker</title>
      <!-- Inclure jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Inclure DataTables CSS et JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
      <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
 <!-- DataTables JavaScript -->
 <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16"  href="/edutasker/images/edutasker1.png">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      
    }
    .content {
  max-width: 1200px;
  margin-left: 250px; 
  padding: 20px;
  min-height: calc(100vh - 200px); /* Ajustez cette hauteur en fonction de la taille de votre footer et du reste de la page */
  box-sizing: border-box;
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
      <img  src="/edutasker/images/edutasker1.png" alt="Logo">
    </div>
    <a href="/edutasker/dashboard1.php" style="<?php if($active==1)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-home"></i>Tableau de bord</a>
    
    <a class="dropdown-btn" onclick="toggleDropdown('professeurs')" style="<?php if($active==2)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-chalkboard-teacher"></i> Gestion des Professeurs 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="professeurs" class="dropdown-container">
      <a href="/edutasker/prof/prof-form-add.php"><i class="fas fa-user-plus"></i> Ajouter un professeur</a>
      <a href="/edutasker/prof/prof-list.php"><i class="fas fa-eye"></i> Voir les professeurs</a>
      <a href="/edutasker/matiere/matiere-list.php"><i class="fas fa-eye"></i> Liste des matières</a>
      <a href="/edutasker/profgroup/profgroupe-list.php"><i class="fas fa-eye"></i> Listes des groupes de professeur</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('etudiants')" style="<?php if($active==3)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-user-graduate"></i> Gestion des Étudiants 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="etudiants" class="dropdown-container">
      <a href="/edutasker/etudiant/etudiant-list.php" ><i class="fas fa-user-plus"></i> Ajouter un étudiant</a>
      <a href="/edutasker/etudiant/etudiant-list.php"><i class="fas fa-eye"></i> Voir les étudiants</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('rapport')"><i class="fas fa-chart-bar"></i> Rapport 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="rapport" class="dropdown-container">
      <a href="/edutasker/rapport/statistiques_ecoles.php"><i class="fas fa-chart-pie"></i> Statistiques d'école</a>
      <a href="/edutasker/rapport/performance_professeurs.php"><i class="fas fa-chart-line"></i> Prof d'ecole</a>
    </div>
    
    <a class="dropdown-btn" onclick="toggleDropdown('parametres')"><i class="fas fa-cogs"></i> Paramètres 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="parametres" class="dropdown-container">
      <a href="/edutasker/parametres/gestion_utilisateurs.php"><i class="fas fa-user-cog"></i> Gestion des utilisateurs</a>
      <a href="/edutasker/parametres/configuration_application.php"><i class="fas fa-cog"></i> Configuration de l'application</a>
    </div>
    
    <a href="/edutasker/deconnexion.php" style="background-color: #f44336; color: #fff; border-radius: 0 20px 20px 0;"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
  </div>
  <script>
    function toggleDropdown(id) {
      var dropdownContent = document.getElementById(id);
      dropdownContent.classList.toggle('dropdown-active');
    }
  </script>
  <div class="content">

