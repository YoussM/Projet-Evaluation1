<?php

require_once("../modele/data.php");

// condition pour recupere met mon id et ma bdd

$id = $_GET['id'];

if (isset($_POST['infoTache'])) {
    $titreTache = $_POST['titreTache'];
    $descriptionTache = $_POST['descriptionTache'];
    insertTache($titreTache, $descriptionTache, $id);
}

// condition recup bdd pour affichage en page ajout tache

$tache=recupBddTache($id);

$projet=recupSingleProject($id);



include("../vue/vueAffichageProjet.php");
