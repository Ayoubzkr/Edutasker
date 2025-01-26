<?php
require("../connexion.php");
$r = "select * from prof";
$res = mysqli_query($con, $r);
$nbr_prof= mysqli_num_rows($res);
$active=2;
require("../menu2.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des Professours</h3><a href=prof-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un prof'><i class="fa-regular fa-square-plus"></i></a>
    <a href=prof-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des prof'><?php echo $nbr_prof; ?></a>
    <a href=prof-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les prof'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id prof</th>
                <th>Nom </th>
                <th>Prenom</th>
                <th>Telephon</th>
                <th>Email</th>
                <th>description</th>
                <th>Mot de passe</th>
                <th>Date creaction</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idprof'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idprof'];
                echo "<td>" . $data['nomprof'];
                echo "<td>" . $data['prenomprof'];
                echo "<td>" . $data['tel'];
                echo "<td>" . $data['emailprof'];
                echo "<td>" . $data['description'];
                echo "<td>" . $data['mdp'];
                echo "<td>" . $data['datecreation'];
                echo "<td> <a href=prof-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=prof-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>