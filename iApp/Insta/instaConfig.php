<?php
	session_start();
	set_time_limit(128);
	ini_set('default_socket_timeout', 300);

	define('clientID', '182ad659e9ef46a9aedcbce9fede226c');
	define('clientSecret', 'd5f553ffe50f49afa1f42a60bc54ae9a');
	define('websiteURL', 'http://iapp.roobique.com');
	define('redirectURI', 'http://iapp.roobique.com/Insta/login.php');
	define('accessTokenURL', 'https://api.instagram.com/oauth/access_token');

	//https://api.instagram.com/oauth/authorize/?client_id=182ad659e9ef46a9aedcbce9fede226c&redirect_uri=http://iapp.roobique.com/Insta/login.php&response_type=code
