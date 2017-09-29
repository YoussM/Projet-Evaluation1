<?php
require_once("dbConnect/dbConnect.php");

function insertBdd($titre, $description, $date_fin)
{
    $bdd=connectionDataBase();
    $req= $bdd->prepare('INSERT INTO projet SET titre=? , description=?, date_fin=?');
    $req->execute([$titre,$description,$date_fin]);
}
