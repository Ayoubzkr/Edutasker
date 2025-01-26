<?php
require("../connexion.php");
$r = "select groupe.*,ecole.* from groupe,ecole where ecole.idecole=groupe.idecole";
$res = mysqli_query($con, $r);
$nbr_groupe = mysqli_num_rows($res);
$active = 5;
require('../menu3.php');
?>
<div class=entete-list>
    <h3 class="display-6">Liste des groupes</h3><a href=groupe-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un groupe'><i class="fa-regular fa-square-plus"></i></a>
    <a href=groupe-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des groupe'><?php echo $nbr_groupe; ?></a>
    <a href=groupe-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les groupe'><i class="fa-solid fa-print"></i></a>
</div><br>
<div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id groupe</th>
                <th>Nom groupe</th>
                <th>Abreviation</th>
                <th>Cycle</th>
                <th>Filiere</th>
                <th>niveau</th>
                <th>Annee scolaire</th>
                <th>Numero de groupe</th>
                <th>ID ecole</th>
                <th class="colm"></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idgroupe'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idgroupe'];
                echo "<td>" . $data['nomgroupe'];
                echo "<td>" . $data['abreviation'];
                echo "<td>" . $data['cycle'];
                echo "<td>" . $data['filiere'];
                echo "<td>" . $data['niveau'];
                echo "<td>" . $data['anneescolaire'];
                echo "<td>" . $data['numgroupe'];
                echo "<td>" . $data['idecole'];
                echo "<td> <a href=groupe-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=groupe-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>