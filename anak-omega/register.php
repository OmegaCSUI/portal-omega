<?php
  	require_once "environment.php";
  	require_once "portal.php";
  	require_once "bot.php";

  	$user = portal_get_sso_info();  

	if (!portal_is_authorized($user))
		show_msg('unauthorized accesss.');
		
	if (portal_is_registered($user->npm)) {   //cek udah kedaftar ke portal belom?
		portal_register_user($user->npm);	
	}

	if (portal_is_registered_wiki($user->npm) == 0) {
		if (!isset($_POST['password'])) {
			echo 'create password here<br><form action="register.php" method="post">';
			echo '<input type="password" name="password" value=""><br><input type="password" name="retype" value=""><br><input type="submit" value="create password"></form>';
			//todo: tampilin form login
		} else {
			//init cUrl handle
			if ($_POST['password'] != $_POST['retype'])
				die('password ga sama');
			
			$ch = curl_init();
		  	$cookie_file = $user->npm . time();

			curl_setopt($ch, CURLOPT_URL, "http://".$base_url."/mediawiki/api.php");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);

		  	//login sebagai bot
			$lgtoken = wikimedia_get_token($ch, 'login');	
			if (wikimedia_bot_login($ch, $lgtoken) == false)
				show_error('init curl', 'bot cant login');
			
			//create account
			$createtoken = wikimedia_get_token($ch, 'createaccount');	
			if (wikimedia_create_account($ch, $user, $_POST['password'], $createtoken) == true)
				portal_set_registered_wiki($user->npm);

			curl_close($ch);
			redirect('http://'.$GLOBALS['base_url']);
		}
	} else {
		show_msg('already registered');
	}
?>