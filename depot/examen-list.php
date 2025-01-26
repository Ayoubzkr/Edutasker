<?php
require("../connexion.php");
$r = "select*from devoirs where nommatiere='Mathématiques'";
$res = mysqli_query($con, $r);
$active = 5;
require("../menu4.php");
?>
<div class="table-responsive"><br>
<b class="display-6">examens - <small>Mathématiques</small></b><br>
    <table class="table table-striped table-hover table-responsive" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date creation</th>
                <th scope="col">Date limite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                echo "<tr class='text-danger'>";
                echo "<td width='10%'><small><a href='/edutasker/depot/descrip-list.php?id=" . urlencode($id) . "'>". $data['titre']."</a></small></td>";
                echo "<td><small>" . $data['date_de_creation']."<small></td>";
                echo "<td width='10%'>" . $data['date_limite']."<td>";
                
            }
       
            ?>
        </tbody>
    </table>
</div>
<?php

$r = "select*from devoirs where nommatiere='physique'";
$res = mysqli_query($con, $r);
?>
<div class="table-responsive"><br>
<b class="display-6">Examens - <small>Physique</small></b><br>
    <table class="table table-striped table-hover table-responsive" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date creation</th>
                <th scope="col">Date limite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                echo "<tr class='text-danger'>";
                echo "<td width='10%'><small><a href='/edutasker/depot/descrip-list.php?id=" . urlencode($id) . "'>". $data['titre']."</a></small></td>";
                echo "<td><small>" . $data['date_de_creation']."<small></td>";
                echo "<td width='10%'>" . $data['date_limite']."<td>";
                
            }
            ?>
        </tbody>
    </table>
    <?php
$r = "select*from devoirs where nommatiere='Français'";
$res = mysqli_query($con, $r);
?>
<div class="table-responsive"><br>
<b class="display-6">Examens - <small>Français</small></b><br>
    <table class="table table-striped table-hover table-responsive" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date creation</th>
                <th scope="col">Date limite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                echo "<tr class='text-danger'>";
                echo "<td width='10%'><small><a href='/edutasker/depot/descrip-list.php?id=" . urlencode($id) . "'>". $data['titre']."</a></small></td>";
                echo "<td><small>" . $data['date_de_creation']."<small></td>";
                echo "<td width='10%'>" . $data['date_limite']."<td>";
                
            }
            ?>
        </tbody>
    </table>
    <?php
$r = "select*from devoirs where nommatiere='Littérature'";
$res = mysqli_query($con, $r);
?>
<div class="table-responsive"><br>
<b class="display-6">examens - <small> Littérature</small></b><br>
    <table class="table table-striped table-hover table-responsive" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date creation</th>
                <th scope="col">Date limite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                echo "<tr class='text-danger'>";
                echo "<td width='10%'><small><a href='/edutasker/depot/descrip-list.php?id=" . urlencode($id) . "'>". $data['titre']."</a></small></td>";
                echo "<td><small>" . $data['date_de_creation']."<small></td>";
                echo "<td width='10%'>" . $data['date_limite']."<td>";
                
            }
            ?>
        </tbody>
    </table>
    <?php
$r = "select*from devoirs where nommatiere='Histoire'";
$res = mysqli_query($con, $r);
?>
<div class="table-responsive"><br>
<b class="display-6">Examens - <small>Histoire</small></b><br>
    <table class="table table-striped table-hover table-responsive" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date creation</th>
                <th scope="col">Date limite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                echo "<tr class='text-danger'>";
                echo "<td width='10%'><small><a href='/edutasker/depot/descrip-list.php?id=" . urlencode($id) . "'>". $data['titre']."</a></small></td>";
                echo "<td><small>" . $data['date_de_creation']."<small></td>";
                echo "<td width='10%'>" . $data['date_limite']."<td>";
                
            }
            ?>
        </tbody>
    </table>
    <?php
$r = "select*from devoirs where nommatiere='Biologie'";
$res = mysqli_query($con, $r);
?>
<div class="table-responsive"><br>
<b class="display-6">Examens - <small>Biologie</small></b><br>
    <table class="table table-striped table-hover table-responsive" id="dataTable">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date creation</th>
                <th scope="col">Date limite</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($res)) {
                $id = $data['id'];
                echo "<tr class='text-danger'>";
                echo "<td width='10%'><small><a href='/edutasker/depot/descrip-list.php?id=" . urlencode($id) . "'>". $data['titre']."</a></small></td>";
                echo "<td><small>" . $data['date_de_creation']."<small></td>";
                echo "<td width='10%'>" . $data['date_limite']."<td>";
                
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>
</div>
</body>