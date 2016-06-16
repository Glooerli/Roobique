<?php
	session_start();
	require('./connectionHandler.php');
	$SearchKey = $_POST['SearchKey'];
	$regex = new MongoRegex('/^'. $SearchKey .'/i');

	$res = $querys->FIND(array('username' => $regex), 'Users');
	echo '{ "users": ' . $res . ' }';
