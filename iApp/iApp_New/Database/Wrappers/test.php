<?php
  require('../../Loaders/Autoload.php');

/*  use roobique\Database\Queries\Find;

  $find = new Find();

  $test = $find->find(array(), 'Images');
  print_r($test);

  use roobique\Database\Queries\Random;

  $random = new Random();

  $test = $random->random('Images');
  echo $test;

  use roobique\Database\Queries\Count;

  $count = new Count();

  $test = $count->count('Images');
  echo $test; */

  use roobique\Database\Queries\Insert;

  $insert = new Insert();

  $insert->insert(array("InstaID" => "281376780",
	                      "username" => "janos_imhof",
	                      "bio" => "",
	                      "website" => "",
	                      "profile_picture" => "https://scontent.cdninstagram.com/t51.2885-19/s150x150/13109059_1702829883313548_768875236_a.jpg",
	                      "full_name" => "Janos Imhof"), 'Users');
