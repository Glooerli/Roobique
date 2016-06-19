<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;
    use roobique\Database\Queries\Count;

    class Random extends Count {
      	public function random($collection) {
          $collection = $this->connect($collection);
          echo $this->count('Images');
          echo rand(0, $this->count($collection));
    		  return json_encode(iterator_to_array($collection->find(array(), ['skip' => rand(0, $this->count($collection)), 'limit' => 1]), false));
        }
    }
  }
