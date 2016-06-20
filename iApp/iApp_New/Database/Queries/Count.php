<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    abstract class Count extends Connector {
        abstract protected function random($collection);

      	public function count($collection) {
          return $this->connect($collection)->count(array());
        }

        public function find($statement, $collection) {}
    }
  }
