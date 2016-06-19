<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          return iterator_to_array($collection->find($statement), false);
        }

        public function count($collection);
    }
  }
