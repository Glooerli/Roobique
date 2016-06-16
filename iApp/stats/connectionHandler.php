<?php
	session_start();
	require('../src/autoload.php');

  use roobique\db\databaseWrapper;
	use roobique\db\querys;
	use roobique\src\convertTime;
  use roobique\stats\getDates;
  use roobique\stats\countLikes;
  use roobique\stats\countDislikes;

  date_default_timezone_set('Europe/Zurich');
	$database = new databaseWrapper('roobique');
	$convertTime = new convertTime();
	$querys = new querys($database, $convertTime);
  $getDates = new getDates();
  $countLikes = new countLikes($querys);
  $countDislikes = new countDislikes($querys);
