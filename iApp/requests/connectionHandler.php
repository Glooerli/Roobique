<?php
	require('../src/autoload.php');

  use roobique\db\databaseWrapper;
	use roobique\db\querys;
	use roobique\src\convertTime;

	$database = new databaseWrapper('roobique');
	$convertTime = new convertTime();
	$querys = new querys($database, $convertTime);
