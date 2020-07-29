<?php ob_start();

$title="SPORT | JOURNAL ";

$js = SRC_PUBLIC_JS."/js_default_Sport.js";

$css = SRC_PUBLIC_CSS."/css_default_Sport.css";

?>

BONJOUR LE MONDE 



<?php

$test = ob_get_clean();

require_once("layoutSport.php");



?>