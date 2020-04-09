<?php

include('database.php');

function req_liste_aliments($aliment, $id_utilisateur)
{
    $where = '';

    if ($aliment != NULL)
        $where = 'WHERE a.nom_aliment LIKE "%'.$aliment.'%"';
        
    $sql = "SELECT a.id, a.nom_aliment, (SELECT niveau FROM aliments_aime WHERE id_aliment = a.id AND id_utilisateur = ?) as niveau FROM aliments a $where ORDER BY a.nom_aliment";
    $req = db()->prepare($sql);
    $req->execute([$_SESSION['utilisateur']]);

    return $req->fetchAll(PDO::FETCH_ASSOC);
}

function ajouter_aliment($nom_aliment)
{
    $sql = "INSERT INTO aliments (nom_aliment) VALUES (?)";
    $ins = db()->prepare($sql);
    $ins->execute([$nom_aliment]);
}

function count_by_nom_utilisateur($nom_utilisateur)
{
    $sql = "SELECT COUNT(*) as nb FROM utilisateurs WHERE nom_utilisateur = ?";
    $count = db()->prepare($sql);
    $count->execute([$nom_utilisateur]);

    return $count->fetchAll(PDO::FETCH_ASSOC)[0]['nb'];
}

function req_by_nom_utilisateur($nom_utilisateur)
{
    $sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = ?";
    $req = db()->prepare($sql);
    $req->execute([$nom_utilisateur]);

    return $req->fetchAll(PDO::FETCH_ASSOC)[0];
}

function req_by_id_utilisateur($id_utilisateur)
{
    $sql = "SELECT * FROM utilisateurs WHERE id = ?";
    $req = db()->prepare($sql);
    $req->execute([$id_utilisateur]);

    return $req->fetchAll(PDO::FETCH_ASSOC)[0];
}

function count_by_id_aliment($id_aliment, $id_utilisateur)
{
    $sql = "SELECT COUNT(*) as nb FROM aliments_aime WHERE id_aliment = ? AND id_utilisateur = ?";
    $count = db()->prepare($sql);
    $count->execute([$id_aliment, $id_utilisateur]);

    return $count->fetchAll(PDO::FETCH_ASSOC)[0]['nb'];
}

function ajoute_aliment_aime($id_aliment, $id_utilisateur, $niveau)
{
    $sql = "INSERT INTO aliments_aime (id_utilisateur, id_aliment, niveau) VALUES (?, ?, ?)";
    $ins = db()->prepare($sql);
    $ins->execute([$id_utilisateur, $id_aliment, $niveau]);
}

function update_aliment_aime($id_aliment, $id_utilisateur, $niveau)
{
    $sql = "UPDATE aliments_aime SET niveau = ? WHERE id_utilisateur = ? AND id_aliment = ?";
    $upd = db()->prepare($sql);
    $upd->execute([$niveau, $id_utilisateur, $id_aliment]);
}
