<?php
	require_once "environment.php";
	require_once "portal.php";

	portal_init();
	SSO\SSO::authenticate();
	header("Location: ".$GLOBALS['base_url']."/anak-omega/");
?>