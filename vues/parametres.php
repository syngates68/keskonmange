<h1><span class="material-icons">settings</span>Paramètres du compte</h1>

<?php 
$utilisateur = req_by_id_utilisateur($_SESSION['utilisateur']);

if (isset($_SESSION['erreur'])) : 
?>

<div class="alert alert-danger alert-dismissible fade show">
    <?= $_SESSION['erreur']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php 
unset($_SESSION['erreur']);
endif;

if (isset($_SESSION['succes'])) : 
?>

<div class="alert alert-success alert-dismissible fade show">
    <?= $_SESSION['succes']; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php 
unset($_SESSION['succes']);
endif;
?>

<div class="parametres">
    <p><B>Nom d'utilisateur :</B> <?= $utilisateur['nom_utilisateur']; ?> <a class="link_modal" type="button" data-toggle="modal" data-target="#modifier_nom_utilisateur">Modifier</a></p>
    
    <h2>Modifier le mot de passe</h2>
    <form method="POST" action="<?= BASEURL; ?>inc/modifier_mot_de_passe.php">
        <div class="form-group">
            <input type="password" class="form-control" name="pass_actuel" placeholder="Mot de passe actuel">
        </div>
        <div class="row">
            <div class="form-group col-sm-12 col-lg-6">
                <input type="password" class="form-control" name="pass" placeholder="Nouveau mot de passe">
            </div>
            <div class="form-group col-sm-12 col-lg-6">
                <input type="password" class="form-control" name="pass2" placeholder="Confirmer mot de passe">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="modifier_mot_de_passe">Modifier</button>
    </form>
    
    <div class="modal fade" id="modifier_nom_utilisateur" tabindex="-1" role="dialog" aria-labelledby="modifier_nom_utilisateur_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modifier_nom_utilisateur_label">Modifier le nom d'utilisateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= BASEURL; ?>inc/modifier_nom_utilisateur.php">
                        <div class="form-group">
                            <label for="nom_utilisateur">Nouveau nom d'utilisateur</label>
                            <input type="text" class="form-control" id="nom_utilisateur" name="nom_utilisateur">
                        </div>
                        <button type="submit" class="btn btn-primary" name="modifier_nom_utilisateur">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>