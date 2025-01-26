<?php
session_start();
require("../connexion.php"); // Inclure le fichier de connexion à la base de données

$nom = $_POST['email'];
$password = $_POST['password'];

// Requête SQL pour vérifier si l'utilisateur est un professeur
$r = "SELECT * FROM prof WHERE nomprof= '$nom' AND mdp = '$password'";
$res = mysqli_query($con, $r);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['role'] = 'professeur';
        header("Location:professeur_menu.php");
        exit();
    }
}
// Requête SQL pour vérifier si l'utilisateur est un ecole
$r = "SELECT * FROM ecole WHERE interlocuteur LIKE '%$nom%' AND motdepasse = '$password'";
$res = mysqli_query($con, $r);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['role'] = 'ecole';
        header("Location:ecole_menu.php");
        exit();
    }
}
if ($nom == "admin" && $password=="admin") {
   
        header("Location:tes.php");
        exit();
}
// Requête SQL pour vérifier si l'utilisateur est un étudiant
$r = "SELECT * FROM etudiant WHERE nom= '$nom' AND mdp = '$password'";
$res = mysqli_query($con, $r);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['role'] = 'etudiant';
        header("Location:etudiant_menu.php");
        exit();
    }
}
header("Location: login.php?error=1");
exit();
?>
