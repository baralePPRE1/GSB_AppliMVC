<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Barale Karine
 * @copyright 2018
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */

/*2/12/2018
*if ($estConnecte && $typePersonnel = 'vm') {
    include 'vues/v_accueil.php';
} else {
    if ($estConnecte && $typePersonnel = 'c') {
        include 'vues/v_accueilc.php';
    } else {
        include 'vues/v_connexion.php';
    }
}
*/

if (!$estConnecte) {
    include 'vues/v_connexion.php';
    include 'vues/v_entete.php';
} else 
    if ($_SESSION ['typePersonnel']=='c') {
        include 'vues/v_enteteC.php'; 
        include 'vues/v_accueilC.php';
    }
  else
    if ($_SESSION ['typePersonnel']=='vm'){
        include 'vues/v_entete.php';
        include 'vues/v_accueil.php';  
    }
