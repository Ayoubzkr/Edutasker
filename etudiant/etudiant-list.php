<?php
require("../connexion.php");
$r = "select *from etudiant";
$res = mysqli_query($con, $r);
$nbr_etudiant= mysqli_num_rows($res);
$active=3;
// Vérifiez si le paramètre 'pas' est présent dans l'URL.
if (isset($_GET['pas'])) {
    // Convertissez en entier pour éviter les problèmes de sécurité.
    $pas = intval($_GET['pas']);
    
    // Vérifiez la valeur de $pas et incluez le bon fichier de menu.
    if ($pas == 4) {
        require('../menu3.php');
    } else {
        require('../menu2.php');
    }
} else {
    // Si 'pas' n'est pas défini, vous pouvez définir un comportement par défaut.
    require('../menu2.php'); // Par défaut, incluez menu2.php.
}
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des etudiants</h3><a href=etudiant-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un etudiant'><i class="fa-regular fa-square-plus"></i></a>
    <a href=etudiant-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des etudiant'><?php echo $nbr_etudiant; ?></a>
    <a href=etudiant-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les etudiant'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id etudiant</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Mot de passe</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idetudiant'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idetudiant'];
                echo "<td>" . $data['nom'];
                echo "<td>" . $data['prenom'];
                echo "<td>" . $data['adresse'];
                echo "<td>" . $data['tel'];
                echo "<td>" . $data['email'];
                echo "<td>" . $data['datenaissance'];
                echo "<td>" . $data['mdp'];
                echo "<td> <a href=etudiant-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=etudiant-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>