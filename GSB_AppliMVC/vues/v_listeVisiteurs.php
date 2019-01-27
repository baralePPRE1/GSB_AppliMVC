<?php
/*Vue Liste visiteurs
 *PHP Version 7
 *
 *@author karine Barale 
 *PPE GSB
 */
?>
<form action="index.php?uc=validerFrais&action=selectMois"
 method="post" role="form">
 <input name="uc" value="validerFrais" type="hidden">
 <input name="action" value="selectMois"type="hidden">
<div class="form-group">
<label for="lstVisiteurs" accesskey="n">Visiteur : </label>
<select id="lstVisiteurs" name="lstVisiteurs" class="form-control">
<?php
foreach ($lesVisiteurs as $unVisiteur) {
    $id = $unVisiteur['id'];
    $nom = $unVisiteur['nom'];
    $prenom = $unVisiteur['prenom'];
    ?>
            <option value="<?php echo $id ?>">
                <?php echo $nom . '/' . $prenom ?> </option>
            <?php
        }
        ?>          
 </select > 
            </div>
            <input  id="ok"type="submit"value="Valider" class="btn btn-success"                   
                   role="button">
        </form>
    </div>
</div>