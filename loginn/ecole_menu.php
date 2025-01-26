<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plateforme Éducative</title>
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
    }
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #343a40;
      padding-top: 20px;
      position: fixed;
      transition: all 0.3s ease;
      overflow: hidden;
    }
    .sidebar a, .dropdown-btn {
      padding: 15px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #ffffff;
      display: flex;
      align-items: center;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      transition: background-color 0.3s ease, color 0.3s ease;
    }
    .sidebar a:hover, .dropdown-btn:hover {
      background-color: rgba(0, 0, 0, 0.2);
      color: #000;
    }
    .dropdown-container {
      display: none;
      overflow: hidden;
      transition: max-height 0.3s ease;
    }
    .dropdown-container a {
      padding: 10px 30px;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
      width: calc(100% - 250px);
      transition: margin-left 0.3s ease, width 0.3s ease;
    }
    .sidebar i {
      margin-right: 10px;
    }
    .dropdown-btn.active + .dropdown-container {
      display: block;
    }
    .dropdown-btn.active {
      background-color: #007bff;
      color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="sidebar bg-primary">
    <a href="/edutasker/dashboard.php"><i class="fas fa-home"></i> Home</a>
    <button class="dropdown-btn"><i class="fas fa-upload"></i> Dépôt 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </button>
    <div class="dropdown-container">
      <a href="/edutasker/depot/devoir.php" onclick="showSection('devoirs')"><i class="fas fa-file-alt"></i> Devoirs</a>
      <a href="/edutasker/depot/examen.php" onclick="showSection('examens')"><i class="fas fa-edit"></i> Examens</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-book"></i> Consultation 
      <span style="margin-left:auto;"><i class="fas fa-caret-down"></i></span>
    </button>
    <div class="dropdown-container">
      <a href="#" onclick="showSection('consultation_devoirs')"><i class="fas fa-file-alt"></i> Devoirs</a>
      <a href="#" onclick="showSection('consultation_examens')"><i class="fas fa-edit"></i> Examens</a>
    </div>
    <a href="#" onclick="showSection('comptes')"><i class="fas fa-user-cog"></i> Gestion des Comptes</a>
    <a href="#" onclick="showSection('ecoles')"><i class="fas fa-school"></i> Gestion des Écoles</a>
  </div>
<script>
    function showSection(sectionId) {
      var sections = document.querySelectorAll('.section');
      sections.forEach(function(section) {
        section.style.display = 'none';
      });
      document.getElementById(sectionId).style.display = 'block';
    }

    var dropdown = document.getElementsByClassName("dropdown-btn");
    for (var i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>