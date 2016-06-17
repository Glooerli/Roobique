<?php

  namespace roobique\Database\Queries {
    require('../../Loaders/Autoload.php');

    use roobique\Database\Wrappers\Connector;
    use MongoClient;
    use MongoCollection;
    
    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          $collection->find([]);
        }
    }
  }
