<?php
session_start();
include('../config/config.php');
include('../config/fonctions.php');

if (isset($_POST['modifier_nom_utilisateur']))
{
    if (!empty($_POST['nom_utilisateur']))
    {
        if (strlen($_POST['nom_utilisateur']) < 30)
        {
            if (count_by_nom_utilisateur($_POST['nom_utilisateur']) == 0)
            {
                update_nom_utilisateur($_POST['nom_utilisateur'], $_SESSION['utilisateur']);
                $_SESSION['succes'] = "Votre nom d'utilisateur a bien été mis à jour.";
                header('Location:'.BASEURL.'parametres.html');
                exit;
            }
            else
            {
                $_SESSION['erreur'] = "Ce nom d'utilisateur n'est pas disponible.";
                header('Location:'.BASEURL.'parametres.html');
                exit;
            }
        }
        else
        {
            $_SESSION['erreur'] = "Votre nom d'utilisateur est trop long.";
            header('Location:'.BASEURL.'parametres.html');
            exit;
        }
    }
    else
    {
        $_SESSION['erreur'] = "Vous n'avez pas renseigné le nouveau nom d'utilisateur que vous souhaitez.";
        header('Location:'.BASEURL.'parametres.html');
        exit;
    }
}