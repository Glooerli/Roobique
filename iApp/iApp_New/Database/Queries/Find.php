<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Find extends Connector {
      	public function find($statement, $collection) {
          $collection = $this->connect($collection);
          $results = array();
          $time_start = microtime(true);
          foreach(iterator_to_array($collection->find($statement), false) as $result){
            $result['_id'] = (string)$result['_id'];
            array_push($results, $result);
          }
          $time_end = microtime(true);
          $time = $time_end - $time_start;
          echo $time;
          return json_encode($results);
        }

        public function count($collection) {}
    }
  }
