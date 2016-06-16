<?php
	namespace roobique\db {

	use roobique\src\convertTime;

	class querys {
		private $databaseWrapper;
		private $convertTime;

		public function __construct(databaseWrapper $database, convertTime $convertTime){
			$this->databaseWrapper = $database;
			$this->convertTime = $convertTime;
		}

		public function FIND($statement, $collection){
			if(isset($_SESSION['access_token'])){
				$results = $this->databaseWrapper->find($statement, $collection);

				if($collection == 'Images'){
					$resultsI = json_decode($results, true);
					unset($results);

					foreach($resultsI as $result){
						$result['created_time'] = $this->convertTime->time_elapsed_string($result['created_time']);
						$results[] = $result;
					}

					$results = json_encode($results);
				}

				return $results;
			}
		}

		public function COUNT($statement, $collection){
			if(isset($_SESSION['access_token'])){
				$results = $this->databaseWrapper->count($statement, $collection);
				return $results;
			}
		}

		public function RANDOM($number, $collection){
			if(isset($_SESSION['access_token'])){
				$results = $this->databaseWrapper->random($number, $collection);
				return $results;
			}
		}

		public function INSERT($arrayToInsert, $collection){
			if(isset($_SESSION['access_token'])){
				$this->databaseWrapper->insert($arrayToInsert, $collection);
			}
		}

		public function REMOVE($arrayToRemove, $collection){
			if(isset($_SESSION['access_token'])){
				$this->databaseWrapper->remove($arrayToRemove, $collection);
			}
		}

		public function UPDATE($arrayToUpdate, $arrayToUse, $collection){
			if(isset($_SESSION['access_token'])){
				$this->databaseWrapper->update($arrayToUpdate, $arrayToUse, $collection);
			}
		}
	}
}
