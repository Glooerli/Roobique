<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $results = array();
          foreach(iterator_to_array($this->connect($collection)->find($statement), false) as $result){
            $result['_id'] = (string)$result['_id'];
            array_push($results, $result);
          }

          return json_encode($results);
        }

        public function count($collection) {}
        public function insert($statement, $collection) {}
    }
  }
