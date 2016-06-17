<?php
  require('../../Loaders/Autoload.php');

  use roobique\Database\Queries\Find;

  $find = new Find();

  $test = $find->find(array(), 'Images');
  json_decode($test, true);
  foreach($test as $bla ){
    print_r($bla);
    echo $bla[0]['_id']->{'$id'};
  }
