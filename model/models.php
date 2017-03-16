<?php
include 'realisations.php';


function connectToDb(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cms;charset=utf8', 'root', 'root');
    }

    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    return $bdd;
}