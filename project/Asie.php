<?php ob_start();

$title = "ASIE | NEWS "


?>

<!-- menu  -->


<button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

<div class="menu">
    <ul>
        <li> <a id="ph" class="api" href="">Philippines </a> </li>
        <li><a id="my" href="">Malaisie </a></li>
        <li><a id="id" href="">Indonesie</a></li>
        <li><a id="cn" href="">Chine</a></li>
        <li><a id="hk" href="">Honk-Kong</a></li>
        <li><a id="in" href="">India</a></li>
        <li><a id="tw" href="">Taiwan</a></li>
        <li><a id="sg" href="">Singapour</a></li>
        <li><a id="kr" href="">Coree du Sud</a></li>
        <li><a id="jp" href="">Japon</a></li>
    </ul>
</div>

<!-- end menu -->
<h1>ASIE</h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>