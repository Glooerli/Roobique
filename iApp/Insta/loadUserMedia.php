<?php
	session_start();

	require('./instaHandler.php');

	if(isset($_SESSION['access_token'])){
		$instaURL = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' . $_SESSION['access_token'];
		$results = $connectToInsta->connectToInstagram($instaURL);
		$results = json_decode($results, true);

			foreach($results['data'] as $data) {
				if($data['type'] == 'image'){
					$InstaID = $data['id'];
					$created_time = $data['created_time'];
					$InstaURL = $data['images']['standard_resolution']['url'];
					$width = $data['images']['standard_resolution']['width'];
					$height = $data['images']['standard_resolution']['height'];

					$Image = array(
						  				'InstaID' => $InstaID,
						  				'InstaURL' => $InstaURL,
						  				'PosterID' => $_SESSION['UserID'],
						  				'created_time' => $created_time,
						  				'width' => $width,
						  				'height' => $height,
											'likes' => '0',
											'dislikes' => '0'
						  			);

					$querys->INSERT($Image, 'Images');
				}
			}
	}else{
		echo 'Invalid access_token!';
	}
