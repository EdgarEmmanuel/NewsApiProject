   <?php ob_start();

$title = "AMERIQUE | NEWS ";


?>

    <div class="articles">

    </div>

   <button class="btn"> <i class="fa fa-bars fa-4x" aria-hidden="true"></i> </button>

   <div class="menu">
       <ul>
       <li>  </li>
          <li> <a id="bg" class="api" href="">Bulgarie </a> </li>
          <li> <a id="be" href="">Belgique </a> </li>
           <li><a id="br" href="">Bresil </a></li>
           <li> <a id="ar" href="">Argentine </a> </li>
           <li><a id="au" href="">Australie </a></li>
           <li><a id="cu" href="">Cuba</a></li>
           <li><a id="cn" href="">Chine</a></li>
           <li><a id="co" href="">Colombie</a></li>
           <li><a id="eg" href="">Egypt</a></li>
           <li><a id="fr" href="">France</a></li>
           <li><a id="hk" href="">Honk-Kong</a></li>
           <li><a id="in" href="">India</a></li>
           <li><a id="hu" href="">Hongrie</a></li>
           <li><a id="de" href="">Allemagne</a></li>
           <li><a id="il" href="">Israel</a></li>
           <li><a id="jp" href="">Japon</a></li>
       </ul>
   </div>

<h1>AMERIQUE</h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>