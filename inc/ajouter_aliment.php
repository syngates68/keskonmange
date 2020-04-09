<?php
include('../config/config.php');
?>

<form method="POST" action="<?= BASEURL; ?>inc/post_ajouter_aliment.php">
    <div class="form-group">
        <label for="nom_aliment">Nom de l'aliment</label>
        <input type="text" class="form-control" id="nom_aliment" name="nom_aliment">
    </div>
    <button type="submit" class="btn btn-primary" name="valider_ajout_aliment">Ajouter</button>
</form>