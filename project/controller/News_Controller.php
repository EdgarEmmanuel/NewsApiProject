<?php 



class News_Controller{

    public function getPageAfrique(){
        include_once(SRC_VIEWS."/afrique.php");
    }

    public function getPageOrient(){
        include_once(SRC_VIEWS."/Orient.php");
    }

    public function getPageAccueil(){
        include_once(SRC_VIEWS."/accueil.php");
    }

    public function getPageEurope(){
        include_once(SRC_VIEWS."/Europe.php");
    }

    public function getPageAsie(){
        include_once(SRC_VIEWS."/Asie.php");
    }

    public function getPageAmerique(){
        include_once(SRC_VIEWS."/Amerique.php");
    }


}



?>