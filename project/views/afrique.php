<?php ob_start();

$title = "AFRIQUE | NEWS "


?>



<!-- menu  -->


<button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

<div class="menu">
    <ul>
       <li> <a id="ng" class="api" href="">Nigeria </a> </li>
       <li> <a id="za" href="">Afrique Sud </a> </li>
       <li> <a id="eg" href="">Egypte </a> </li>
       <li><a id="ma" href="">Maroc</a></li>
    </ul>
</div>

<!-- end menu -->


<h1>AFRIQUE </h1>




<?php 

$content=ob_get_clean();
require_once("layout.php");

?>