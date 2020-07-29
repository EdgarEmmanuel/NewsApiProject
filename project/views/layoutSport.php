<?php ob_start();

$title = "SPORT ";

?>
<body>

<?= $test ?> 

</body>


<?php 

$content = ob_get_clean();

require_once("layout.php");



?>