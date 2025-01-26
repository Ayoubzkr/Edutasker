<?php
require("../connexion.php");
$r = "select * from ecole";
$res = mysqli_query($con, $r);
$nbr_ecole= mysqli_num_rows($res);
$active=2;
require("../menu1.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des ecoles</h3><a href=ecole-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un ecole'><i class="fa-regular fa-square-plus"></i></a>
    <a href=ecole-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des ecole'><?php echo $nbr_ecole; ?></a>
    <a href=ecole-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les ecole'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id ecole</th>
                <th>Nom </th>
                <th>Logo </th>
                <th>Adresse </th>
                <th>Tel 1 </th>
                <th>Tel 2</th>
                <th>Email</th>
                <th>Annee de fondation</th>
                <th>Annee de démarrage</th>
                <th>Type</th>
                <th>Déscription</th>
                <th>interlocuteur</th>
                <th>Mot de passe</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $photo=$data['logo'];
                $id = $data['idecole'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idecole'];
                echo "<td>" . $data['nomecole'];
                echo "<td><img src='../images/$photo' style=width:50px>";
                echo "<td>" . $data['adresse'];
                echo "<td>" . $data['tel1'];
                echo "<td>" . $data['tel2'];
                echo "<td>" . $data['email'];
                echo "<td>" . $data['anneefondation'];
                echo "<td>" . $data['anneedemarrage'];
                echo "<td>" . $data['type'];
                echo "<td>" . $data['description'];
                echo "<td>" . $data['interlocuteur'];
                echo "<td>" . $data['motdepasse'];
                echo "<td> <a href=ecole-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=ecole-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>