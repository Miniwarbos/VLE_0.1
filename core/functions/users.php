<?php
function user_exists($username) {
	$username = sanitize($username);
	return (mysql_result("SELECT COUNT(`id`) FROM `users` WHERE `username` = '$username'"), 0) == 1) ? true : false;

}

?>
