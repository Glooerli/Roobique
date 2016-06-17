<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;
    use MongoClient;
    use MongoCollection;
    use MongoDB;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          $collection->find([]);
        }
    }
  }
