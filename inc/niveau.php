<?php
session_start();
include('../config/config.php');
include('../config/fonctions.php');

if (count_by_id_aliment($_POST['id_aliment'], $_SESSION['utilisateur']) == 0)
    ajoute_aliment_aime($_POST['id_aliment'], $_SESSION['utilisateur'], $_POST['niveau']);
else
    update_aliment_aime($_POST['id_aliment'], $_SESSION['utilisateur'], $_POST['niveau']);