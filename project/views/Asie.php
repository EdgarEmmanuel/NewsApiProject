<?php ob_start();

$title = "ASIE | NEWS ";


$css = SRC_PUBLIC_CSS."/menu_general.css";


?>

<!-- menu  -->
<button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

<div class="menu">
    <ul>
        <li> <a id="ph" class="api" href="">Philippines </a> </li>
        <li><a id="my" class="api" href="">Malaisie </a></li>
        <li><a id="id" class="api" href="">Indonesie</a></li>
        <li><a id="cn" class="api" href="">Chine</a></li>
        <li><a id="hk" class="api" href="">Honk-Kong</a></li>
        <li><a id="in" class="api" href="">India</a></li>
        <li><a id="tw" class="api" href="">Taiwan</a></li>
        <li><a id="sg" class="api" href="">Singapour</a></li>
        <li><a id="kr" class="api" href="">Coree du Sud</a></li>
        <li><a id="jp" class="api" href="">Japon</a></li>
    </ul>
</div>

<!-- end menu -->
<h1>ASIE</h1>




<?php 

$js = SRC_PUBLIC_JS."/asie.js";

$data =ob_get_clean();
require_once("accueil.php");

?>