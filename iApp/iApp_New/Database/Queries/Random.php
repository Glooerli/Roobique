<?php

  namespace roobique\Database\Queries {
    require('/var/www/roobique/vendor/autoload.php');
    require('../../Loaders/Autoload.php');

    use roobique\Database\Wrappers\Connector;

    class Random extends Connector {
      	public function random($collection) {
          $collection = $this->connect($collection);
    		  return json_encode(iterator_to_array($collection->find()->skip(1)->limit(1), false));
        }
    }
  }
