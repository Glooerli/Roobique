<?php

  namespace roobique\Database\Queries {
    require('../../Loaders/Autoload.php');

    use roobique\Database\Wrappers\Connector;
    use MongoClient;
    use MongoCollection;
    use MongoDB\Client;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          $collection->find([]);
        }
    }
  }
