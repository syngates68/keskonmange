<?php
session_start();
include('../config/config.php');
include('../config/fonctions.php');

if (isset($_POST['modifier_mot_de_passe']))
{
    if (!empty($_POST['pass_actuel']) && !empty($_POST['pass']) && !empty($_POST['pass2']))
    {
        $utilisateur = req_by_id_utilisateur($_SESSION['utilisateur']);

        if (password_verify($_POST['pass_actuel'], $utilisateur['pass']))
        {
            if ($_POST['pass'] == $_POST['pass2'])
            {
                update_mdp(password_hash($_POST['pass'], PASSWORD_BCRYPT), $_SESSION['utilisateur']);
                $_SESSION['succes'] = "Votre mot de passe a bien été mis à jour.";
                header('Location:'.BASEURL.'parametres.html');
                exit;
            }
            else
            {
                $_SESSION['erreur'] = "Les deux mots de passe ne sont pas identiques.";
                header('Location:'.BASEURL.'parametres.html');
                exit;
            }
        }
        else
        {
            $_SESSION['erreur'] = "Le mot de passe actuel est incorrect.";
            header('Location:'.BASEURL.'parametres.html');
            exit;
        }
    }
    else
    {
        $_SESSION['erreur'] = "Tous les champs sont obligatoires.";
        header('Location:'.BASEURL.'parametres.html');
        exit;
    }
}