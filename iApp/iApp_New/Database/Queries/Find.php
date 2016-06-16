<?php

  namespace roobique\Database\Queries {
    require('../../Loaders/Autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          $collection->find([]);
        }
    }
  }
