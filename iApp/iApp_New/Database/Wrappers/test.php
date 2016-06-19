<?php
  require('../../Loaders/Autoload.php');

  /* use roobique\Database\Queries\Find;

  $find = new Find();

  $test = $find->find(array(), 'Images');
  echo (string)$test[0]['_id']; */

  /* use roobique\Database\Queries\Random;

  $random = new Random();

  $test = $random->random('Images');
  echo $test; */

  use roobique\Database\Queries\Count;

  $count = new Count();

  $test = $count->count('Images');
  echo $test;
