<?php

  namespace roobique\Database\Wrappers {
    require('/var/www/roobique/vendor/autoload.php');

    use MongoClient;
    use MongoCollection;
    use MongoDB;
    use MongoDB\Client;

    abstract class Connector {

      abstract protected function find($statement, $collection);

      public function connect($collection) {
        $client = new MongoDB\Client("mongodb://localhost:27017");
        return $client->selectDatabase('roobique')->selectCollection($collection);
      }
    }
  }
