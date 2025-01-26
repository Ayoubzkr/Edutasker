<?php
$active=2;
require("../menu1.php");
require("../connexion.php");
$r = "select * from ecole order by idecole desc limit 1";
    $res = mysqli_query($con, $r);
$data = mysqli_fetch_assoc($res);
$nbr_ecole =  $data['idecole'] + 1;
?>
<div class="container" style="margin-top: 100px;">
<form method="POST" action="ecole-add.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Formulaire ecole</legend>
			<div class="row">
			<div class="form-group col-md-3">
				<label>Id ecole</label>
				<input type="text" name="idecole" value="<?php echo $nbr_ecole;?>"  class="form-control">
			</div>
				<div class="form-group col-md-3">
					<label>Nom ecole</label>
					<input type="text" name="nomecole" required class="form-control">
				</div>
				<div class="form-group col-md-3">
					<label>interlocuteur</label>
					<input type="text" name="interlocuteur" required class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>Adresse</label>
					<textarea name="adresse" id="" cols="30" rows="3" class="form-control"></textarea>
				</div>
			<div class="form-group col-md-4">
				<label>Tél 1</label>
				<input type="text" name="tel1" required class="form-control">
			</div>
            <div class="form-group col-md-4">
				<label>Tél 2</label>
				<input type="text" name="tel2" required class="form-control">
			</div>
			
		</div>
		<div class="row">
        <div class="form-group col-md-4">
				<label>Email</label>
				<input type="text" name="email" required class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label>Description</label>
				<input type="text" name="description" required class="form-control">
			</div>
			
			<div class="form-group col-md-4">
				<label>Type</label>
				<input type="text" name="type" required class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-3">
				<label>Annee de fondation</label>
				<input type="date" name="anneefondation" required class="form-control">
			</div>
            <div class="form-group col-md-3">
				<label>Annee de demarrage</label>
				<input type="date" name="anneedemarrage" required class="form-control">
			</div>
			
            <div class="form-group col-md-3">
				<label>Logo</label>
				<input type="file" name="photo" id="logo" accept="image/*" class="form-control" onchange="previewImage()"><br>
				<img src="" id="preview" alt="Aperçu de l'image" style="width: 50px; display: none;">
			</div>
			<div class="form-group col-md-3">
				<label>Mot de passe</label>
				<input type="text" name="motdepasse" required class="form-control">
			</div>
		</div>
			<br>
			<button type="submit" class="btn btn-primary">
				<i class="fas fa-save"></i> Enregistrer
			</button>
		</fieldset>
	</form>
	
	<script>
        function previewImage() {
            var input = document.getElementById('logo');
            var preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>
</div>