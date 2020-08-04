<?php


// POUR STYLE
define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));
define("SRC_PUBLIC_CSS",WEBROOT."CSS");
define("SRC_PUBLIC_JS",WEBROOT."JS");
define("SRC_IMG",WEBROOT."img");

// POUR DOSSIER controllers , views and Models.
define("ROOT",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));
define("SRC_VIEWS",ROOT."views");
define("SRC_CONTROLLER",ROOT."controller");


//appel controller 
include_once(SRC_CONTROLLER."/News_Controller.php");
include_once(SRC_CONTROLLER."/Sport_Controller.php");

$contrrol = new News_Controller();

$control_sport = new Sport_Controller();


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
        case "Orient": 
            $contrrol->getPageOrient();
        break;

        case "sport" : 
            $control_sport->getPageSportDef();
        break;
    }
}else{
    $contrrol->getPageAccueil();
}







?>