<?php
session_start();

require('classes/page.class.php');
$nerdwolf = new NerdwolfPage;
$nerdwolf->assign('title','My profile');

if (isset($_SESSION['user'])) {
	$nerdwolf->display('myprofile.tpl');
}
else {
	$nerdwolf->display('register.tpl');
}
?>
