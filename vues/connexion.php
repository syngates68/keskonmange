<form class="form-signin" method="POST" action="<?= BASEURL; ?>inc/verifier_identifiants.php">
    <img class="mb-4" src="<?= BASEURL; ?>assets/images/tomate.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Se connecter</h1>
    <?php 
    if (isset($_SESSION['erreur'])) :
    ?>
        <div class="alert alert-danger">
            <?= $_SESSION['erreur']; ?>
        </div>
    <?php
    endif;
    unset($_SESSION['erreur']);
    ?>
    <label for="nom_utilisateur" class="sr-only">Nom d'utilisateur</label>
    <input type="text" id="nom_utilisateur" name="nom_utilisateur" placeholder="Nom d'utilisateur" class="form-control" required autofocus>
    <label for="pass" class="sr-only">Mot de passe</label>
    <input type="password" id="pass" name="pass" class="form-control" placeholder="Mot de passe" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember_me"> Se souvenir de moi
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" name="se_connecter" type="submit">Se connecter</button>
</form>