<?php
	extract($_POST);
	require("../connexion.php");
	echo "<meta charset=utf-8>";
	$name = $_FILES['photo']['name'];
	$type = $_FILES['photo']['type'];
	$taille = $_FILES['photo']['size'];
	$tmp = $_FILES['photo']['tmp_name'];
	
	if ($type != 'image/png' && $type != 'image/jpg' && $type != 'image/jpeg') {
		echo "<br>Erreur 01: veuillez envoyer une image";
	} else {
		$name = utf8_decode($name);
		$dossier = '../images/';
		$uploading = false;
		if (move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $name)) {
			$uploading = true;
			$photo = $dossier . $name; // Mise à jour de la variable $photo avec le chemin de l'image téléchargée
		}
		if ($uploading == false) {
			echo "<br>Erreur 03: Erreur de téléchargement de l'image";
		} else {
			$r = "INSERT INTO ecole (idecole, nomecole, interlocuteur, adresse, email, tel1, tel2, description, anneedemarrage, type, anneefondation, motdepasse, logo) 
      VALUES (".$idecole.", '".$nomecole."','".$interlocuteur."','".$adresse."','".$email."','".$tel1."','".$tel2."','".$description."','".$anneedemarrage."','".$type."','".$anneefondation."','".$motdepasse."','".$photo."')";

			mysqli_query($con, $r);
			require("../fonctions.php");
			redirection("../dashboard.php");
            
		}
	}
	
?>