<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'professeur') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Professeur</title>
</head>
<body>
    <h1>Menu Professeur</h1>
    <!-- Mettez ici le contenu du menu pour les professeurs -->
    <ul>
        <li><a href="deposer_devoirs.php">Déposer des devoirs</a></li>
        <li><a href="deposer_examens.php">Déposer des examens</a></li>
        <li><a href="gerer_etudiants.php">Gérer les étudiants</a></li>
        <!-- Ajoutez d'autres liens de menu si nécessaire -->
    </ul>
</body>
</html>
