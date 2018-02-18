<?php
session_start();

require('classes/page.class.php');
require('classes/user.class.php');
$nerdwolf = new NerdwolfPage;

$profileId = $_GET['id'];

$nerdwolf->assign('title','Profile');

$user = new NerdwolfUser;
$profile = $user->getUserById($profileId);

if ($profile == false) {
  $profile['error'] = 'User konnte nicht gefunden werden.';
}

$nerdwolf->assign('profile',$profile);

if (isset($_SESSION['user'])) {
	$nerdwolf->display('profile.tpl');
}
else {
	$nerdwolf->display('register.tpl');
}
?>
