<?php ob_start();

$title = "ORIENT | NEWS "

?>

<!-- menu  -->


<button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

<div class="menu">
    <ul>
        <li> <a id="il" class="api" href="">Israel</a> </li>
        <li><a id="sa" class="api" href="">Arabie-Saoudite </a></li>
        <li><a id="ae" class="api" href="">Emirats Arabes Unis</a></li>
    </ul>
</div>

<!-- end menu -->
<h1>ORIENT</h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>