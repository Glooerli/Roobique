<?php

	namespace roobique\db {

	use MongoClient;
	use MongoCollection;

	class databaseWrapper {

		private $db;
		private $mongoClient;
		private $collection;
		private $username;
		private $password;

		public function __construct($db) {
			$this->db = $db;
		}

		private function connect() {
				$this->mongoClient = new MongoClient();
				$this->useDB();
				$this->useCollection();
		}

		private function useDB() {
			$this->db = $this->mongoClient->selectDB($this->db);
		}

		private function useCollection() {
		  $this->collection = new MongoCollection($this->db, $this->collection);
		}

		public function find($statement, $collection) {
			$this->collection = $collection;
			$this->connect();
			$result = $this->collection->find($statement);
		  return json_encode(iterator_to_array($result, false));
		}

		public function count($statement, $collection) {
			$this->collection = $collection;
			$this->connect();
			$count = $this->collection->count($statement);
			return $count;
		}

		public function random($number, $collection) {
			$this->collection = $collection;
			$this->connect();
			$random = $this->collection->find()->skip($number)->limit(1);
		  return json_encode(iterator_to_array($random, false));
		}

		public function insert($document, $collection) {
			$this->collection = $collection;
			$this->connect();
			$this->collection->insert($document);
		}

		public function remove($document, $collection) {
			$this->collection = $collection;
			$this->connect();
			$this->collection->remove($document);
		}

		public function update($arrayToUpdate, $arrayToUse, $collection) {
			$this->collection = $collection;
			$this->connect();
			$newdata = array('$set' => $arrayToUse);
			$this->collection->update($arrayToUpdate, $newdata);
		}
	}
}
