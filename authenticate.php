<?php
session_start();
require("connexion.php"); // Inclure le fichier de connexion à la base de données

$nom = $_POST['login'];
$password = $_POST['psw'];

// Requête SQL pour vérifier si l'utilisateur est un professeur
$r = "SELECT * FROM prof WHERE nomprof= '$nom' AND mdp = '$password'";
$res = mysqli_query($con, $r);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['role'] = 'professeur';
        header("Location:dashboard2.php");
        exit();
    }
}
// Requête SQL pour vérifier si l'utilisateur est un ecole
$r = "SELECT * FROM ecole WHERE nomecole LIKE '%$nom%' AND motdepasse = '$password'";
$res = mysqli_query($con, $r);
$pas=$password;
if ($res) {
    $row = mysqli_fetch_assoc($res);

    if (mysqli_num_rows($res) > 0) {
        $_SESSION['role'] = 'ecole';
        header("Location:dashboard1.php?pas=". urlencode($password) ."");
        exit();
    }
}
if ($nom == "admin" && $password=="admin") {
        require('fonctions.php');
        header("Location:dashboard.php");
        exit();
}
// Requête SQL pour vérifier si l'utilisateur est un étudiant
$r = "SELECT * FROM etudiant WHERE nom= '$nom' AND mdp = '$password'";
$res = mysqli_query($con, $r);

if ($res) {
    $row = mysqli_fetch_assoc($res);
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['role'] = 'etudiant';
        header("Location:dashboard3.php");
        exit();
    }
}
header("Location: index.php?error=1");
exit();
?>
