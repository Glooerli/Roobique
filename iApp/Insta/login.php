<?php
	require('./instaHandler.php');

	session_start();

	if(isset($_GET['code'])){
		$results = $connectToInsta->login($_GET['code']);

		if(!isset($results['code'])){
			$Info = array(
						'InstaID' => $results['user']['id'],
						'username' => $results['user']['username'],
						'bio' => $results['user']['bio'],
						'website' => $results['user']['website'],
						'profile_picture' => $results['user']['profile_picture'],
						'full_name' => $results['user']['full_name']
					);
			echo '<pre>' . print_r($Info) . '</pre>';

			$saveUser->save($Info);

			$_SESSION['access_token'] = $results['access_token'];
			$_SESSION['InstaID'] = $Info['InstaID'];

			$InstaID = $Info['InstaID'];
			$UserID = $querys->FIND(array('InstaID' => $InstaID), 'Users');
			$UserID = json_decode($UserID, true);
			$UserID = $UserID[0]['_id']['$id'];

			$_SESSION['UserID'] = $UserID;

			header("Location: ./success.php?UserID=" . $UserID);
		}else{
			header("Location: ./error.php?errorCode=" . $results['error']);
		}
	}else{
		echo 'error';
	}
