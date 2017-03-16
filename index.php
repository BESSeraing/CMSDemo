<?php
include 'model/models.php';
include 'view/view.php';


$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);// list, create, insert
$entity = 'rea';

switch ($action){
    case 'insert':
        $dynamicContent = getForm();
        break;
    case 'list' :
    default :
        $reas = findAllRea();
        $dynamicContent = generateHtmlTable($reas);
        break;

}

//Afficher une liste de rea
//1. Récupérer les réas
//
//$form = getForm();


//$dynamicContent = generateHtmlTable($reas);
//
ouputPage($dynamicContent);


