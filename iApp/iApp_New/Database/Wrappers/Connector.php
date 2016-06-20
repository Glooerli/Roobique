<?php

  namespace roobique\Database\Wrappers {
    require('/var/www/roobique/vendor/autoload.php');
    require('../../Loaders/Autoload.php');

    use MongoDB;
    use MongoCollection;
    use Mongo;

    abstract class Connector {
      abstract protected function find($statement, $collection);
      abstract protected function insert($statement, $collection);
      abstract protected function count($collection);

      public function connect($collection) {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        return $client->selectDatabase('roobique')->selectCollection($collection);
      }
    }
  }
