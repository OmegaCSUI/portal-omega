<?php
	require_once "environment.php";
	require_once "portal.php";

	$user = portal_get_sso_info();
	
	echo 'logged in as '.$user->name.' ('.$user->npm.')</br>is_authorized() = '.portal_is_authorized($user).'</br></br>';
	echo '<a href="register.php">register wiki account here</a></br>';
	echo '<a href="'.$GLOBALS['mediawiki_url'].'">wiki here</a></br>';
	echo '<a href="logout.php">logout</a></br>';
?>