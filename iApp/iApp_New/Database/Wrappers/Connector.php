<?php

  namespace roobique\Database\Wrappers {
    require('../../Loaders/Autoload.php');

    use MongoClient;
    use MongoCollection;

    abstract class Connector {

      abstract protected function find();

      public function connect($collection) {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        return $client->selectDatabase('roobique')->selectCollection($collection);
      }
    }
  }
