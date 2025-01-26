<?php
$pas = 4; // Ou toute autre valeur dynamique que vous avez.
?>
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
          <!-- Font Awesome CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
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
    <a href="/edutasker/dashboard2.php" style="<?php if($active==1)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-home"></i> Tableau de bord</a>
    <a class="dropdown-btn" onclick="toggleDropdown('etudiants')" style="<?php if($active==3)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-user-graduate"></i> Gestion des Étudiants 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="etudiants" class="dropdown-container">
      <a href="/edutasker/gestion/ajouter_etudiant.php"><i class="fas fa-user-plus"></i> Ajouter un étudiant</a>
      <a href="/edutasker/etudiant/etudiant-list.php?pas=<?php echo $pas; ?>"><i class="fas fa-eye"></i> Voir les étudiants</a>
    </div>
    <a class="dropdown-btn" onclick="toggleDropdown('cours')" style="<?php if($active==4)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-book"></i> Gestion des Cours 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="cours" class="dropdown-container">
      <a href="/edutasker/depot/devoir.php"><i class="fas fa-plus-circle"></i> Ajouter un devoir</a>
      <a href="/edutasker/depot/examen.php"><i class="fas fa-eye"></i> Ajuter un examen</a>
    </div>
    <a class="dropdown-btn" onclick="toggleDropdown('groupe')" style="<?php if($active==5)echo 'background-color: #fff; color: #3f5efb; border-radius: 0 20px 20px 0;';?>"><i class="fas fa-book"></i> Gestion des groupes 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </a>
    <div id="groupe" class="dropdown-container">
      <a href="/edutasker/goupe/groupe-form-add.php"><i class="fas fa-plus-circle"></i> Ajouter un groupe</a>
      <a href="/edutasker/groupe/groupe-list.php"><i class="fas fa-eye"></i> Voir les groupes</a>
      <a href="/edutasker/etudiantgroupe/etudiantgroupe-list.php"><i class="fas fa-eye"></i> Voir les groupes des étudiants</a>
    </div> <!-- Fermeture de la div manquante -->
    <a href="/edutasker/deconnexion.php" style="background-color: #f44336; color: #fff; border-radius: 0 20px 20px 0;"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
  </div>
  <script>
    function toggleDropdown(id) {
      var dropdownContent = document.getElementById(id);
      dropdownContent.classList.toggle('dropdown-active');
    }
  </script>
  <div class="content">
    <!-- Contenu principal ici -->

