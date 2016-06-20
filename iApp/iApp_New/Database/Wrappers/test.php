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

  use roobique\Database\Queries\Find;

  $insert = new Insert();

  $insert->insert(array('user_name' => 'test'), 'Users');
