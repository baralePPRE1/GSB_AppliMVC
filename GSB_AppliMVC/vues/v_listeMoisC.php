<?php
/*Lister les mois pour les comptables
 * 
 *@category  PPE
 * @package   GSB
 * @author    Barale Karine
 * @copyright 2018
 * @license   Réseau CERTA
 */
?>
<h2>Les fiches de frais</h2> 
<div class="row">
   <div class="col-md-4">
       <h3>Sélectionner un mois : </h3>
      </div>
           <div class="col-md-4">
            <form action="index.php?uc=validerFrais&action=afficherFrais"
                  method="post" role="form">
                  <?php //reprend les infos du visiteur medical choisi
                  //?>
                  <input name="uc" value="validerFrais" type="hidden">
                  <input name="action" value="afficherFrais" type="hidden">
                  <input id="lstVisiteurs" name="lstVisiteurs" class="form-control"
                                  <option value="<?php echo $id .'/'. $nomduvm ?>">
          <div class="form-group">
                <label for="lstMois" accesskey="n">Mois : </label>
                <select id="lstMois" name="lstMois" class="form-control">
                    <?php
                    foreach ($lesMois as $unMois) 
                    {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>">
                                <?php echo $numMois . '/' . $numAnnee ?> </option>
                            <?php
                               }
                     }
                    ?>    

                </select>
            </div>
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
        </form>
    </div>
</div>