<?php ob_start();

$title = "EUROPE | NEWS ";


$css = SRC_PUBLIC_CSS."/menu_general.css";


?>


<!-- menu  -->


<button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

<div class="menu">
    <ul>
    <li>  </li>
       <li> <a id="bg" class="api" href="">Bulgarie </a> </li>
       <li> <a id="be" class="api" href="">Belgique </a> </li>
        <li><a id="cz" class="api" href="">Republique Tcheque</a></li>
        <li><a id="fr" class="api" href="">France</a></li>
        <li><a id="hu" class="api" href="">Hongrie</a></li>
        <li><a id="de" class="api" href="">Allemagne</a></li>
        <li><a id="it" class="api" href="">Italie</a></li>
        <li><a id="ca" class="api" href="">Canada</a></li>
        <li><a id="gb" class="api" href="">Royaume-Uni</a></li>
        <li><a id="gr" class="api" href="">Grece</a></li>
        <li><a id="ie" class="api" href="">Irlande</a></li>
        <li><a id="ca" class="api" href="">Canada</a></li>
        <li><a id="nl" class="api" href="">Pays-Bas</a></li>
        <li><a id="pl" class="api" href="">Pologne</a></li>
        <li><a id="pt" class="api" href="">Portugal</a></li>
        <li><a id="tr" class="api" href="">Turquie</a></li>
    </ul>
</div>

<!-- end menu -->



<h1>EUROPE </h1>




<?php 
$js = SRC_PUBLIC_JS."/europe.js";


$data =ob_get_clean();
require_once("accueil.php");

?>