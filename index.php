<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('config/config.php');
include('config/fonctions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keskonmange</title>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>assets/images/tomate.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        var baseurl = "<?= BASEURL; ?>"
    </script>
</head>
<body <?php if (!isset($_SESSION['utilisateur'])) : ?> class="text-center" <?php endif; ?>>

    <?php 
    if (isset($_SESSION['utilisateur'])) :
        include("vues/index.php"); 
    else :
        include("vues/connexion.php"); 
    endif;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>