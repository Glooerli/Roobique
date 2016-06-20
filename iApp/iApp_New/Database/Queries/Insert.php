<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Insert extends Connector {
      	public function insert($statement, $collection) {
          return $this->connect($collection)->insert($statement);
        }

        public function find($statement, $collection) {}
        public function count($collection) {}
    }
  }
