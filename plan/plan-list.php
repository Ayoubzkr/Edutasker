<?php
require("../connexion.php");
$r = "select * from plan";
$res = mysqli_query($con, $r);
$nbr_plan= mysqli_num_rows($res);
$active=3;
require("../menu1.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des plans</h3><a href=plan-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un plan'><i class="fa-regular fa-square-plus"></i></a>
    <a href=plan-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des plan'><?php echo $nbr_plan; ?></a>
    <a href=plan-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les plan'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id Plan</th>
                <th>Paiement </th>
                <th>Mode de paiment</th>
                <th>Period</th>
                <th>Nombre d'écoles</th>
                <th>Nombre des professeurs</th>
                <th>Devoire</th>
                <th>Examen</th>
                <th>Nombre d'examen</th>
                <th>Durée</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idplan'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idplan'];
                echo "<td>" . $data['paiement'];
                echo "<td>" . $data['modepaiement'];
                echo "<td>" . $data['periode'];
                echo "<td>" . $data['nbrecole'];
                echo "<td>" . $data['devoire'];
                echo "<td>" . $data['nbrdevoire'];
                echo "<td>" . $data['examen'];
                echo "<td>" . $data['nbrexamen'];
                echo "<td>" . $data['duree'];
                echo "<td> <a href=plan-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=plan-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>

</body>