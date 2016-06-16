<?php
  require('./connectionHandler.php');
  $PostID = $_POST['PostID'];
  $PosterID = $_POST['PosterID'];
  $LikerID = $_SESSION['UserID'];


  $Like = array('PostID' => $PostID,
                'PosterID'  => $PosterID,
                'LikerID' => $LikerID,
                'time_stamp' => (string)strtotime("now")
                );

  $querys->INSERT($Like, 'Likes');

  $image = json_decode($querys->FIND(array('_id' => new MongoId($PostID)), 'Images'), true);
  $imageLikes = (int)$image[0]['likes'];
  $imageLikes++;

  $imageLiked = array('likes' => (string)$imageLikes);

  $querys->UPDATE(array('_id' => new MongoId($PostID)), $imageLiked, 'Images');
