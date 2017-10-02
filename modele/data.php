<?php
require_once("dbConnect/dbConnect.php");

function insertBdd($titre, $description, $date_fin)
{
    $bdd=connectionDataBase();
    $req= $bdd->prepare('INSERT INTO projet SET titre=? , description=?, date_fin=?');
    $req->execute([$titre,$description,$date_fin]);
}

function recupBdd()
{
    $bdd=connectionDataBase();
    $project = $bdd->prepare('SELECT * FROM projet');
    $project->execute();
    $donnee= $project->fetchAll();
    return $donnee;
}

function delete($id)
{
    $bdd=connectionDataBase();
    $req=$bdd->prepare('DELETE FROM projet WHERE id=?');
    $req->execute([$id]);
}

function insertTache($titreTache, $descriptionTache, $date_finTache)
{
    $bdd=connectionDataBase();
    $req= $bdd->prepare('INSERT INTO tache SET titreTache=?, descriptionTache=?, date_finTache=? ');
    $req->execute([$titreTache,$descriptionTache,$date_finTache]);
}
