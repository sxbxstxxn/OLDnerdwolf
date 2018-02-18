<?php
session_start();

require('classes/page.class.php');
require('classes/user.class.php');
$nerdwolf = new NerdwolfPage;
$nerdwolf->assign('title','Userlist');

//var_dump($_SESSION['user']);die;

$user = new NerdwolfUser;
$userlist = $user->getUserlist();

//remove loggedin User from userlist
foreach($userlist as $key=>$user) {
	if ($user['id'] == $_SESSION['user']['id']) {
		unset($userlist[$key]);
	}
}


$nerdwolf->assign('userlist',$userlist);

if (isset($_SESSION['user'])) {
	$nerdwolf->display('userlist.tpl');
}
else {
	$nerdwolf->display('register.tpl');
}
?>
