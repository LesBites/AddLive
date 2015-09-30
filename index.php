<?php
if(isset($_GET['p'])) {
	$p = $_GET['p'];

} else {
	$p = 'home';
}
ob_start();
if($p === 'home') {
	require 'ressource/tamere/template/index.php';
}
$content = ob_get_clean();
require 'ressource/tamere/template/default/template.php';
