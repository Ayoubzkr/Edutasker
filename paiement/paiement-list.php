<?php
require("../connexion.php");
$r = "select * from paiement";
$res = mysqli_query($con, $r);
$nbr_paiement= mysqli_num_rows($res);
$active=3;
require("../menu1.php");
?>              
    <div class=entete-list>
        <h3 class="display-6">Liste des paiements</h3><a href=paiement-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Ajouter un paiement'><i class="fa-regular fa-square-plus"></i></a>
    <a href=paiement-form-add.php class='btn btn-primary ttip' data-bs-toggle='tooltip' title='Nombre des paiement'><?php echo $nbr_paiement; ?></a>
    <a href=paiement-print.php class='btn btn-primary' data-bs-toggle='tooltip' title='Imprimer tous les paiement'><i class="fa-solid fa-print"></i></a>
    </div><br>
    <div class="table-responsive">
    <table id="example" class="table table-striped table-primary text-danger">
        <thead>
            <tr>
                <th>Id Paiement</th>
                <th>Id plan </th>
                <th>Id ecole </th>
                <th>Date debut </th>
                <th>Date fin</th>
                <th>Paye</th>
                <th>Mode de paiement</th>
                <th>Déscription</th>
                <th>Date de paiement</th>
                <th class="colm"></th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['idpaiement'];
                echo "<tr class='text-danger'>";
                echo "<td>" . $data['idpaiement'];
                echo "<td>" . $data['idplan'];
                echo "<td>" . $data['idecole'];
                echo "<td>" . $data['datedebut'];
                echo "<td>" . $data['datefin'];
                echo "<td>" . $data['paye'];
                echo "<td>" . $data['mdepaiement'];
                echo "<td>" . $data['description'];
                echo "<td>" . $data['datepaiement'];
                echo "<td> <a href=paiement-form-update.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Modifier cette ligne' class='text-primary'><i class='fa-solid fa-pencil'></i></a>";
                echo " <td><a href=paiement-form-delete.php?id=" . urlencode($id) . " data-bs-toggle='tooltip' title='Supprimer cette ligne' class='text-primary'><i class='fa-solid fa-trash-can iconrouge'></i></a>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>