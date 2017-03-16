<?php


function findAllRea(){
    $pdo = connectToDb();
    $query = $pdo->query('SELECT * FROM `rea`');
    return $query->fetchAll();
}