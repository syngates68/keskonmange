<?php
session_start();
include('../config/config.php');
include('../config/fonctions.php');

$recherche = (isset($_POST['recherche'])) ? $_POST['recherche'] : NULL;

$liste_aliments = req_liste_aliments($recherche, $_SESSION['utilisateur']);

if (count($liste_aliments) > 0)
{
    foreach($liste_aliments as $la)
    {
    ?>

        <div class="container">
            <div class="row aliment <?php if ($la['niveau'] == 2 || $la['niveau'] == 3) : ?> niveau<?= $la['niveau']; ?> <?php endif; ?>">
                <div class="col">
                    <?= $la['nom_aliment']; ?>
                </div>
                <div class="col">
                    <select class="form-control niveau" id="niveau_<?= $la['id']; ?>">
                        <option value="1" <?php if ($la['niveau'] == 1 || $la['niveau'] == NULL) : ?> selected <?php endif; ?>>J'aime</option>
                        <option value="2" <?php if ($la['niveau'] == 2) : ?> selected <?php endif; ?>>Je ne suis pas fan</option>
                        <option value="3" <?php if ($la['niveau'] == 3) : ?> selected <?php endif; ?>>Je n'aime pas</option>
                    </select>
                </div>
            </div>
        </div>

    <?php
    }
}
else
{
?>
    <div class="container">
        <p style="color:red">Aucun résultat</p>
    </div>
<?php
}
?>