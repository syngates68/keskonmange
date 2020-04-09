<?php
session_start();
include('../config/config.php');
include('../config/fonctions.php');

if (isset($_POST['valider_ajout_aliment']))
{
    if (!empty($_POST['nom_aliment']))
    {
        if (strlen($_POST['nom_aliment']) < 30)
        {
            ajouter_aliment($_POST['nom_aliment']);

            $_SESSION['succes'] = "<B>".$_POST['nom_aliment']."</B> a bien été ajouté à la liste des aliments.";
            header('Location:'.BASEURL);
            exit; 
        }
        else
        {
            $_SESSION['erreur'] = "La longueur du nom est trop longue.";
            header('Location:'.BASEURL);
            exit; 
        }
    }
    else
    {
        $_SESSION['erreur'] = "Vous n'avez pas renseigné le nom de l'aliment à ajouter.";
        header('Location:'.BASEURL);
        exit;
    }
}