<?php

	namespace roobique\Insta;

	class saveUser {
		private $querys;

		function __construct($querys){
			$this->querys = $querys;
		}

		function save($Info) {
			$InstaID = $Info['InstaID'];

			$row = $this->querys->FIND(array('InstaID' => $InstaID), 'Users');

			$row = json_decode($row, true);
			if(empty($row)) {
				$this->querys->INSERT($Info, 'Users');
			}else{
				$this->querys->UPDATE(array('InstaID' => $InstaID), $Info, 'Users');
			}
		}
	}
