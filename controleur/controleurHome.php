<?php
require_once("../modele/data.php");

// recuperation function bdd

$projet=recupBdd();


// condition pour le btn delect

if (isset($_POST['delete'])) {
    $id=$_POST['id'];
    delete($id);
}











include("../vue/vueHome.php");
