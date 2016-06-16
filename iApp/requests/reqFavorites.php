<?php
	session_start();
	require('./connectionHandler.php');
	$UserID = $_SESSION['UserID'];

	$res = $querys->FIND(array('UserID' => $UserID), 'Favorites');
	echo '{ "favorites": ' . $res . ' }';
