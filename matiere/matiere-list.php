<?php
require("../connexion.php");
$r = "select matiere.*,ecole.*,prof.* from matiere,prof,ecole where ecole.idecole=matiere.idecole and prof.idprof=matiere.idprof";
$res = mysqli_query($con, $r);
$nbr_matiere= mysqli_num_rows($res);
$active=3;
require("../menu2.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des matieres</h3><a href=matiere-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un matiere'><i class="fa-regular fa-square-plus"></i></a>
    <a href=matiere-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des matiere'><?php echo $nbr_matiere; ?></a>
    <a href=matiere-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les matiere'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id matiere</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Id ecole</th>
                <th>Nom ecole</th>
                <th>Id prof</th>
                <th>Nom prof</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idmatiere'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idmatiere'];
                echo "<td>" . $data['nom'];
                echo "<td>" . $data['description'];
                echo "<td>" . $data['idecole'];
                echo "<td>" . $data['nomecole'];
                echo "<td>" . $data['idprof'];
                echo "<td>" . $data['nomprof'];
                echo "<td> <a href=matiere-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=matiere-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>