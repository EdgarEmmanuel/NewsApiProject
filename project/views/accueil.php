<?php ob_start();

$title = "ACCUEIL | NEWS ";


$css = SRC_PUBLIC_CSS."/style.css";

?>

<header>
        <div class="row">
            <ul>
                <a href="">Business</a>
                <a href="">Entertainment </a>
                <a href="">Health</a>
                <a href="">Science</a>
                <a href="index.php?code=sport">Sports</a>
                <a href="">Technology</a>
            </ul>
            <ul>
            <a href="index.php?code=Afrique">Afrique </a>
            <a href="index.php?code=Europe">Europe </a>
            <a href="index.php?code=Asie">Asie</a>
            <a href="index.php?code=Amerique">Amerique </a>
            <a href="index.php?code=Orient">Orient</a>
            </ul>
        </div>
    </header>


    <?php

   if(!empty($data)){
       echo $data;
   }
   
   ?>


   <!-- the div where all the info are going to be upload -->
   <div class="data">

   </div>




<?php 

$content=ob_get_clean();
require_once("layout.php");

?>