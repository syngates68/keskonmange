<?php
if (file_exists('vues/'.$var_page.'.php') )
{
?>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="<?= BASEURL; ?>">
            <img src="<?= BASEURL; ?>assets/images/tomate.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Keskonmange
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASEURL; ?>"><span class="material-icons">home</span>Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>liste_course.html"><span class="material-icons">shopping_cart</span>Faire ma liste de courses</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown_compte" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="material-icons">account_circle</span> <?= req_by_id_utilisateur($_SESSION['utilisateur'])['prenom']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_compte">
                        <a class="dropdown-item" href="<?= BASEURL; ?>parametres.html">Paramètres</a>
                        <a class="dropdown-item" href="<?= BASEURL; ?>deconnexion.html">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container main">
        <?php
            include($var_page.'.php');
        ?>
    </div>
<?php
}
else
{
    include('404.php');
}