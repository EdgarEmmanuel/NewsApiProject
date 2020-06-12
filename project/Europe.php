<?php ob_start();

$title = "EUROPE | NEWS "


?>


<!-- menu  -->


<button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

<div class="menu">
    <ul>
    <li>  </li>
       <li> <a id="bg" class="api" href="">Bulgarie </a> </li>
       <li> <a id="be" href="">Belgique </a> </li>
        <li><a id="cz" href="">Republique Tcheque</a></li>
        <li><a id="fr" href="">France</a></li>
        <li><a id="hu" href="">Hongrie</a></li>
        <li><a id="de" href="">Allemagne</a></li>
        <li><a id="it" href="">Italie</a></li>
        <li><a id="ca" href="">Canada</a></li>
        <li><a id="gb" href="">Royaume-Uni</a></li>
        <li><a id="gr" href="">Grece</a></li>
        <li><a id="ie" href="">Irlande</a></li>
        <li><a id="ca" href="">Canada</a></li>
        <li><a id="nl" href="">Pays-Bas</a></li>
        <li><a id="pl" href="">Pologne</a></li>
        <li><a id="pt" href="">Portugal</a></li>
        <li><a id="tr" href="">Turquie</a></li>
    </ul>
</div>

<!-- end menu -->



<h1>EUROPE </h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>