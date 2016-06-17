<?php

  namespace roobique\Database\Wrappers {
    require('../../Loaders/Autoload.php');

    use MongoClient;
    use MongoCollection;

    abstract class Connector {

      abstract protected function find($statement, $collection);

      public function connect($collection) {
        $client = new MongoClient("mongodb://localhost:27017");
        return $client->'roobique'->selectCollection($collection);
      }
    }
  }
