<?php
  require('./connectionHandler.php');
  $PostID = $_POST['PostID'];
  $UserID = $_SESSION['UserID'];


  $Favorite = array('UserID' => $UserID,
                    'PostID' => $PostID
                  );

  $querys->REMOVE($Favorite, 'Favorites');
