<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          return json_encode(array_map('strval', bson_decode(iterator_to_array($collection->find($statement), false))));
        }

        public function count($collection) {}
    }
  }
