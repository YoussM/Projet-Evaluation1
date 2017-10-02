<?php

require_once("../modele/data.php");

if (isset($_POST['info'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date_fin = $_POST['datefin'];
    insertBdd($titre, $description, $date_fin);
    header('Location: controleurHome.php');
}

if (isset($_POST['infoTache'])) {
    $titreTache = $_POST['titreTache'];
    $descriptionTache = $_POST['descriptionTache'];
    $date_finTache = $_POST['date_finTache'];
    insertTache($titreTache, $descriptionTache, $date_finTache);
    header('Location: controleurHome.php');
}
