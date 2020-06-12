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
           <li><a id="br" href="">Bresil </a></li>
           <li> <a id="ar" href="">Argentine </a> </li>
           <li><a id="mx" href="">Mexique </a></li>
           <li><a id="cu" href="">Cuba</a></li>
           <li><a id="co" href="">Colombie</a></li>
           <li><a id="au" href="">Australie</a></li>
       </ul>
   </div>

<h1>AMERIQUE</h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>