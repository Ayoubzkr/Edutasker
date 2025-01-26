<?php
require('../connexion.php');
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $date_limite = $_POST['date_limite'];
  $professeur_id = $_POST['professeur_id']; // À ajuster en fonction de votre session utilisateur
  $type_devoir = $_POST['type_devoir'];

  // Insertion des données dans la table devoirs
  $r = "INSERT INTO devoirs (titre, description, date_limite, idprof, type_devoir)
          VALUES ('$titre', '$description', '$date_limite', '$professeur_id', '$type_devoir')";

mysqli_query($con, $r);
require("../fonctions.php");
redirection("../dashboard2.php");
}
?>
