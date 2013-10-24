<?php
include 'core/init.php';

if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) || empty($password) === true) {
		$error[] = 'You need to enter a username and password';
	} else if (user_exists($username) === false) {
		$error[] = 'That user does not exist';
	}

}
?>