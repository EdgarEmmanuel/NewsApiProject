<?php

//appel controller 
include_once("News_Controller.php");

$contrrol = new News_Controler();


if(isset($_GET["code"])){
    $get = $_GET["code"];
    switch ($get) {
        case "Afrique":
            $contrrol->getPageAfrique();
            break;
        case "Europe" : 
            $contrrol->getPageEurope();
        break;
        case "Asie" : 
            $contrrol->getPageAsie();
        break;
        case "Amerique" : 
            $contrrol->getPageAmerique();
        break;
    }
}else{
    $contrrol->getPageAccueil();
}







?>