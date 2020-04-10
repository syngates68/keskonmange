<h1><span class="material-icons">fastfood</span>Liste d'aliments</h1>
<br/>
<button class="btn btn-outline-primary" id="ajouter_aliment" data-toggle="modal" data-target="#modal_ajouter_aliment"><span class="material-icons">restaurant</span>Ajouter un aliment</button>


<div class="row">
    <div class="col-sm-12 col-lg-6 formulaire_cherche_aliment">
        <label for="search_aliment">Chercher un aliment</label>
        <input type="text" class="form-control" id="search_aliment">
    </div>
</div>

<?php 
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

<div class="liste_aliments">
</div>

<div class="modal fade" id="modal_ajouter_aliment" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter un aliment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>
<script src="<?= BASEURL; ?>assets/js/liste_aliments.js"></script>
<script>
    $(document).on('click', '#ajouter_aliment', function()
    {
        $.post(baseurl + 'inc/ajouter_aliment.php',
        {

        },
        function(data)
        {
            $('#modal_ajouter_aliment .modal-body').html(data);
        });
    });
    $(document).ready(function()
    {
        $.post(baseurl + 'inc/liste_aliments.php',
        {

        },
        function(data)
        {
            $('.liste_aliments').html(data);
        });
    });
</script>