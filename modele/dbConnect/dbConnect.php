<?php
function connectionDataBase()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=ToDoList;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    return $bdd;
}
