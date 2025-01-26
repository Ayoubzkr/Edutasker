<?php
require("../connexion.php");
$r = "select etudiantgroupe.*,groupe.*,etudiant.* from etudiantgroupe,groupe,etudiant where etudiant.idetudiant=etudiantgroupe.idetudiant and 
groupe.idgroupe=etudiantgroupe.idgroupe";
$res = mysqli_query($con, $r);
$nbr_etudiantgroupe= mysqli_num_rows($res);
$active=5;
require("../menu3.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des groupes des etudiants </h3><a href=etudiantgroupe-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un etudiant groupe'><i class="fa-regular fa-square-plus"></i></a>
    <a href=etudiantgroupe-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des etudiantgroupe'><?php echo $nbr_etudiantgroupe; ?></a>
    <a href=etudiantgroupe-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les etudiantgroupe'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id etudiant</th>
                <th>Nom etudiant </th>
                <th>Id groupe</th>
                <th>Nom groupe</th>
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
                echo "<td>" . $data['nom '];
                echo "<td>" . $data['idgroupe'];
                echo "<td>" . $data['nomgroupe'];
                echo "<td> <a href=etudiantgroupe-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=etudiantgroupe-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>