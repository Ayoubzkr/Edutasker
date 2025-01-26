<?php
$active=4;
require('../menu3.php');
?>
<style>

</style>
<div class="container mt-5">
    <h2>Dépôt d'Examen</h2>
    <form method="post" action="depot_examen.php">
      <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="date_exam" class="form-label">Date de l'Examen</label>
        <input type="date" class="form-control" id="date_exam" name="date_exam" required>
      </div>
      <div class="mb-3">
        <label for="type_examen" class="form-label">Type d'Examen</label>
        <select class="form-select" id="type_examen" name="type_examen" required>
          <option value="QCM">QCM</option>
          <option value="Rédaction">Rédaction</option>
        </select>
      </div>
      <input type="hidden" name="professeur_id" value="1"> <!-- Remplacez par l'ID réel du professeur connecté -->
      <button type="submit" class="btn btn-primary">Déposer</button>
    </form>
  </div>