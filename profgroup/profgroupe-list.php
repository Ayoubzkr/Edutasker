<?php
require("../connexion.php");
$r = "select profgroupe.*,prof.*,groupe.* from profgroupe,prof,groupe where profgroupe.idprof=prof.idprof and profgroupe.idgroupe=groupe.idgroupe";
$res = mysqli_query($con, $r);
$nbr_profgroup= mysqli_num_rows($res);
$active=2;
require("../menu2.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des profgroups</h3><a href=profgroup-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un profgroup'><i class="fa-regular fa-square-plus"></i></a>
    <a href=profgroup-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des profgroup'><?php echo $nbr_profgroup; ?></a>
    <a href=profgroup-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les profgroup'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id prof</th>
                <th>Nom prof </th>
                <th>Id group</th>
                <th>Nom groupe</th>
                <th>Matiere</th>
                <th>description</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idprofgroup'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idprof'];
                echo "<td>" . $data['nomprof'];
                echo "<td>" . $data['idgroupe'];
                echo "<td>" . $data['nomgroupe'];
                echo "<td>" . $data['matiere'];
                echo "<td>" . $data['description'];
                echo "<td> <a href=profgroup-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=profgroup-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>