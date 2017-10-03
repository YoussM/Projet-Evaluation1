<?php
require_once("dbConnect/dbConnect.php");

// function qui insert met info de page d'accueil a bdd

function insertBdd($titre, $description, $date_fin)
{
    $bdd=connectionDataBase();
    $req= $bdd->prepare('INSERT INTO projet SET titre=? , description=?, date_fin=?');
    $req->execute([$titre,$description,$date_fin]);
}

// function recupere donnee bdd pour les affichees sur ma page projet

function recupBdd()
{
    $bdd=connectionDataBase();
    $project = $bdd->prepare('SELECT * FROM projet');
    $project->execute();
    $donnee= $project->fetchAll();
    return $donnee;
}

function recupSingleProject($id)
{
    $bdd=connectionDataBase();
    $projet = $bdd->prepare('SELECT * FROM projet WHERE id=?');
    $projet->execute([$id]);
    $donnee= $projet->fetchAll();
    return $donnee;
}

// function delete projet

function delete($id)
{
    $bdd=connectionDataBase();
    $req=$bdd->prepare('DELETE FROM projet WHERE id=?');
    $req->execute([$id]);
}

// function qui insert met tache en bdd

function insertTache($titreTache, $descriptionTache, $id_projet)
{
    $bdd = connectionDataBase();
    $req = $bdd->prepare('INSERT INTO tache SET titreTache = ?, descriptionTache = ?, id_projet=?');
    $req->execute([$titreTache, $descriptionTache, $id_projet]);
}

// function qui va recupere ma table en bdd et me l'afficher sur ma page tache

function recupBddTache($id)
{
    $bdd=connectionDataBase();
    $task = $bdd->prepare('SELECT * FROM tache WHERE id=?');
    $task->execute([$id]);
    $addTask= $task-> fetch();
    return $addTask;
}
