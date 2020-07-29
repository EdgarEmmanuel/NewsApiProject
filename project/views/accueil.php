<?php ob_start();

$title = "ACCUEIL | NEWS ";


?>



<h1>Accueill</h1>




<?php 

$content=ob_get_clean();
require_once("layout.php");

?>