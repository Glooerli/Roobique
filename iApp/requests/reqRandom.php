<?php
  session_start();
  require('./connectionHandler.php');

  $rows = $querys->COUNT(array(), 'Images');
  $num = rand(0, $rows);
  $res = $querys->RANDOM($num, 'Images');
  echo '{ "images": ' . $res . ' }';
