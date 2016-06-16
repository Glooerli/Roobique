<?php
	session_start();
	require('./connectionHandler.php');
	$UserID = $_POST['ID'];

	$res = $querys->FIND(array('PosterID' => $UserID), 'Images');
	echo '{ "images": ' . $res . ' }';
