<?php
// Récupération de l'identifiant du devoir depuis l'URL
$id = $_GET['id'];

// Requête pour récupérer les informations du devoir correspondant à l'identifiant
$r = "SELECT * FROM devoirs WHERE id = '" . $id . "'";

// Inclusion du fichier de connexion à la base de données
require("../connexion.php");

// Exécution de la requête
$res = mysqli_query($con, $r);

// Récupération des données sous forme de tableau associatif
$data = mysqli_fetch_assoc($res);

// Définir la page active pour la barre de menu
$active = 5;

// Inclusion du menu
require("../menu4.php");
?>

<div class="container">
    <h2 class="display-">Description du devoir</h2>
    <div class="card">
        <div class="card-header">
            <h4><?php echo htmlspecialchars($data['titre']); ?></h4>
        </div>
        <div class="card-body">
            <p><?php echo nl2br(htmlspecialchars($data['description'])); ?></p>
        </div>
        <div class="card-footer">
            <p><strong>Date de création :</strong> <?php echo htmlspecialchars($data['date_de_creation']); ?></p>
            <p><strong>Date limite :</strong> <?php echo htmlspecialchars($data['date_limite']); ?></p>
        </div>
    </div>
</div>

<?php
// Fermeture de la connexion à la base de données
mysqli_close($con);
?>
