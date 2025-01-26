<?php
require('../connexion.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $date_exam = $_POST['date_exam'];
  $professeur_id = $_POST['professeur_id']; // À ajuster en fonction de votre session utilisateur
  $type_examen = $_POST['type_examen'];

  // Insertion des données dans la table examens
  $r = "INSERT INTO examens (titre, description, date_exam, idprof, type_examen)
          VALUES ('$titre', '$description', '$date_exam', '$professeur_id', '$type_examen')";

mysqli_query($con, $r);
require("../fonctions.php");
redirection("../dashboard2.php");
}
?>