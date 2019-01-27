<?php
/**Controleur Validation Frais
 * 
*PHP Version 7
 * @category  PPE
 * @package   GSB
 * @author    Barale Karine
 * @copyright 2018
 * @license   Réseau CERTA
*/

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
include 'vues/v_enteteC.php';
switch ($action) {
    case 'selectVisiteur':
        $lesVisiteurs = $pdo->getLesVisiteurs('vm');
        include 'vues/v_listeVisiteurs.php';
        break;
    case 'selectMois':    
        $id = filter_input(INPUT_POST,'lstVisiteurs',FILTER_SANITIZE_STRING); 
        $leVisiteuraValider = $pdo->getLesInfosdunVisiteurMedical($id);
        $nomduvm = $leVisiteuraValider['nom'];
        $prenomduvm = $leVisiteuraValider['prenom'];
        $lesMois = $pdo->getLesMoisDisponibles($id);
        include 'vues/v_listeMoisC.php';
        break;
    case 'afficherFrais' :
        $id = filter_input(INPUT_POST,'lstVisiteurs',FILTER_SANITIZE_STRING);
        $leMois = filter_input(INPUT_POST, 'lstMois', FILTER_SANITIZE_STRING);
        
        $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($id, $leMois);
        $lesFraisForfait = $pdo->getLesFraisForfait($id, $leMois);
        $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($id, $leMois);
        $numAnnee = substr($leMois, 0, 4);
        $numMois = substr($leMois, 4, 2);
        $libEtat = $lesInfosFicheFrais['libEtat'];
        $montantValide = $lesInfosFicheFrais['montantValide'];
        $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
        $dateModif = dateAnglaisVersFrancais($lesInfosFicheFrais['dateModif']);
        include 'vues/v_etatFraisC.php';
        break; 
    case 'suivreFrais' :
}
?>