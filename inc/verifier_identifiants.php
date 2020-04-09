<?php
session_start();
include('../config/config.php');
include('../config/fonctions.php');

if (isset($_POST['se_connecter']))
{
    if (!empty($_POST['nom_utilisateur']) && !empty($_POST['pass']))
    {
        if (count_by_nom_utilisateur($_POST['nom_utilisateur']) > 0)
        {
            $utilisateur = req_by_nom_utilisateur($_POST['nom_utilisateur']);
            if (password_verify($_POST['pass'], $utilisateur['pass']))
            {
                $_SESSION['utilisateur'] = $utilisateur['id'];
                header('Location:'.BASEURL);
                exit;
            }
            else
            {
                $_SESSION['erreur'] = "Aucun compte ne correspond aux informations rentrées.";
                header('Location:'.BASEURL);
                exit;
            }
        }
        else
        {
            $_SESSION['erreur'] = "Aucun compte ne correspond aux informations rentrées.";
            header('Location:'.BASEURL);
            exit;
        }
    }
    else
    {
        $_SESSION['erreur'] = "Les deux champs sont obligatoires.";
        header('Location:'.BASEURL);
        exit;
    }
}