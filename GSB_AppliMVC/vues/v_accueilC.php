<?php
/* Vue Accueil comptable
 * 
 * PHP Version 7
 * @category  PPE
 * @package   GSB
 * @author    Barale Karine
 * @copyright 2018
 * @license   Réseau CERTA
 */
echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' '.'COMPTABLE';
?></small>
    </h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary2">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=validerFrais&action=selectVisiteur"
                           class="btn btn-primary2 btn-lg" role="button">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <br>Valider les fiches de frais</a>
                        <a href="index.php?uc=etatFrais&action=voirEtatFrais"
                           class="btn btn-primary2 btn-lg" role="button">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <br>Suivre le paiement des fiches de frais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>