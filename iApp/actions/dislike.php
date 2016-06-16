<?php
  require('./connectionHandler.php');
  $PostID = $_POST['PostID'];
  $PosterID = $_POST['PosterID'];
  $DislikerID = $_SESSION['UserID'];


  $Dislike = array('PostID' => $PostID,
                   'PosterID'  => $PosterID,
                   'DislikerID' => $DislikerID,
                   'time_stamp' => (string)strtotime("now")
                  );

  $querys->INSERT($Dislike, 'Dislikes');

  $image = json_decode($querys->FIND(array('_id' => new MongoId($PostID)), 'Images'), true);
  $imageDislikes = (int)$image[0]['dislikes'];
  $imageDislikes++;

  $imageDisliked = array('dislikes' => (string)$imageDislikes);

  $querys->UPDATE(array('_id' => new MongoId($PostID)), $imageDisliked, 'Images');
