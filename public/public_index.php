<?php
	$title = "Home";
	ob_start();
	include "../templates/home_in_site.html.php";
	$output = ob_get_clean();
	include "../templates/publiclayout.html.php";
?>