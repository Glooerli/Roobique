<?php
	session_start();
	require('./connectionHandler.php');
	$UserID = $_POST['ID'];

	$statsArr = array('Likes' => '' . $querys->COUNT(array('PosterID' => $UserID), 'Likes') . '',
						'Dislikes' => '' . $querys->COUNT(array('PosterID' => $UserID), 'Dislikes') . '',
						'Liked' => '' . $querys->COUNT(array('PosterID' => $UserID), 'Likes') . '',
						'Disliked' => '' . $querys->COUNT(array('PosterID' => $UserID), 'Dislikes') . '');

	echo '{ "stats": [', json_encode($statsArr), '] }';
