<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');
    require('../../Loaders/Autoload.php');

    use roobique\Database\Wrappers\Connector;
    use MongoDB;


    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          return $collection->find(array());
        }
    }
  }
