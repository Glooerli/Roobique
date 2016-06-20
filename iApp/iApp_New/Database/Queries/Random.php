<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');

    use roobique\Database\Wrappers\Connector;
    use roobique\Database\Queries\Count;

    class Random extends Count {
      	public function random($collection) {
          $result = iterator_to_array($this->connect($collection)->find(array(), ['skip' => rand(0, $this->count('Images')), 'limit' => 1]), false);
          $result[0]['_id'] = (string)$result[0]['_id'];
    		  return json_encode($result);
        }
    }
  }
