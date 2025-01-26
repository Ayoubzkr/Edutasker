<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'etudiant') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Étudiant</title>
</head>
<body>
    <h1>Menu Étudiant</h1>
    <!-- Mettez ici le contenu du menu pour les étudiants -->
    <ul>
        <li><a href="consulter_devoirs.php">Consulter les devoirs</a></li>
        <li><a href="consulter_examens.php">Consulter les examens</a></li>
        <!-- Ajoutez d'autres liens de menu si nécessaire -->
    </ul>
</body>
</html>
