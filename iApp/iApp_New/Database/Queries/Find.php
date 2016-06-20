<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          $results = array();
          foreach(iterator_to_array($collection->find($statement), false) as $result){
            $result[0]['_id'] = (string)$result[0]['_id'];
            echo $result[0]['_id'];
            array_push($results, $result);
          }
          return json_encode($results);
        }

        public function count($collection) {}
    }
  }
