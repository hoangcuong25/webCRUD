<?php
$title = 'The place you can confess';
ob_start();
include 'templates/home_out_site.html.php';
$output = ob_get_clean();
include 'templates/layout.html.php';
?>
