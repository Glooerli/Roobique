<?php
  require('../../Loaders/Autoload.php');

  use roobique\Database\Queries\Find;

  $find = new Find();

  $test = $find->find('', 'Images');
  echo '<pre>' . print_r(json_decode($test, true)) . '</pre>';
