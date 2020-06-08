<?php ob_start();

$title = "ASIE | NEWS "


?>



<h1>ASIE</h1>




<?php 

$content =ob_get_clean();
require_once("layout.php");

?>