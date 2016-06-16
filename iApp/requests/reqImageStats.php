<?php
	session_start();
	require('./connectionHandler.php');
	$ImageID = $_POST['ID'];

	$statsArr = array('Likes' => '' . $querys->COUNT(array('ImageID' => $ImageID), 'Likes') . '',
						'Dislikes' => '' . $querys->COUNT(array('ImageID' => $ImageID), 'Dislikes') . '');

	echo '{ "stats": [', json_encode($statsArr), '] }';
