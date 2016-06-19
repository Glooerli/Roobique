<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;
    use roobique\Database\Queries\Count;

    class Random extends Count {
      	public function random($collection) {
          $collection = $this->connect($collection);
    		  return json_encode(iterator_to_array($collection->find(array(), ['skip' => rand(0, $this->count('Images')), 'limit' => 1]), false));
        }
    }
  }
