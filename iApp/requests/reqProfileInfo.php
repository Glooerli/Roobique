<?php
	session_start();
	require('./connectionHandler.php');
	$UserID = $_POST['ID'];

	$res = $querys->FIND(array('_id' => new MongoId($UserID)), 'Users');
	echo '{ "users": ' . $res . ' }';
