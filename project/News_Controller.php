<?php 



class News_Controler{

    public function getPageAfrique(){
        include_once("afrique.php");
    }

    public function getPageAccueil(){
        include_once("accueil.php");
    }

    public function getPageEurope(){
        include_once("Europe.php");
    }

    public function getPageAsie(){
        include_once("Asie.php");
    }

    public function getPageAmerique(){
        include_once("Amerique.php");
    }

}



?>