<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Count extends Connector {
      	public function count($collection) {
          $collection = $this->connect($collection);
          return $collection->count(array());
        }

        public function random($collection) {}
        public function find($statement, $collection) {}
    }
  }
