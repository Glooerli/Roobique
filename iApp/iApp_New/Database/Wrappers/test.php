<?php
  require('../../Loaders/Autoload.php');

  use roobique\Database\Queries\Find;

  $find = new Find();

  $test = $find->find(array(), 'Images');
  echo $test[0]['_id']['oid'];
