   <?php ob_start();

$title = "AMERIQUE | NEWS ";


?>

    <div class="articles">

    </div>

   <button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

   <div class="menu">
       <ul>
       <li>  </li>
          <li> <a id="bg" class="api" href="">Etats-Unis </a> </li>
           <li><a id="br" class="api" href="">Bresil </a></li>
           <li> <a id="ar" class="api" href="">Argentine </a> </li>
           <li><a id="mx" class="api" href="">Mexique </a></li>
           <li><a id="cu" class="api" href="">Cuba</a></li>
           <li><a id="co" class="api" href="">Colombie</a></li>
           <li><a id="au" class="api" href="">Australie</a></li>
       </ul>
   </div>

<h1>AMERIQUE</h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>