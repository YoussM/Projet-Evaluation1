<?php

require_once("../modele/data.php");

if (isset($_POST['info'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date_fin = $_POST['datefin'];
    insertBdd($titre, $description, $date_fin);
    header('Location: controleurHome.php');
}
