<?php
session_start();
require('classes/page.class.php');
require('classes/user.class.php');
$nerdwolf = new NerdwolfPage;

$nerdwolf->assign('title','Registration');


// ***** CONFIRM ***** //
if ($_GET['action'] == 'confirm') {
	$key = $_GET['key'];
	$email = $_GET['email'];
	$user = new NerdwolfUser;
	$confirmed = $user->confirmUser($email,$key);
	
	if($confirmed) {
		$nerdwolf->assign('title','Registration confirmed');
		$nerdwolf->assign('registerconfirmed',1);
	}
}

// ***** CONTRADICT ***** //
elseif ($_GET['action'] == 'contradict') {
	$key = $_GET['key'];
	$email = $_GET['email'];
	$user = new NerdwolfUser;
	$contradicted = $user->contradictUser($email,$key);
	
	if($contradicted) {
		$nerdwolf->assign('title','Registration contradicted');
		$nerdwolf->assign('registercontradicted',1);
	}
}

// ***** REGISTRATION ***** //
else {
	if ($_POST['action'] == 'register') {
		
		$user = new NerdwolfUser;
		if ($_POST['password'] != $_POST['retypepassword']) {
				$registererror['username'] = 'passwords do not match';
				$nerdwolf->assign('title','Registration error');
				$nerdwolf->assign('registererror',$registererror);
		}
		else {
			$fieldsValid = $user->createUser($_POST['username'],$_POST['password'],$_POST['email'],$_POST['birthdate']);	
		
			if ($fieldsValid !== true) {
				$nerdwolf->assign('title','Registration error');
				$nerdwolf->assign('registererror',$fieldsValid);
			}
			else {
				$nerdwolf->assign('title','Registration successful');
				$nerdwolf->assign('registersuccess',1);
			}
		}
	}
}

if (isset($_SESSION['user'])) {
	//$nerdwolf->display('myprofile.tpl');
	$nerdwolf->assign('title','Already registered');
	$nerdwolf->assign('alreadyregistered',1);
}
//else {
	$nerdwolf->display('register.tpl');
//}

?>
