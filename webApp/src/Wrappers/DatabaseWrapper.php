<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 01.06.2016
 * Time: 22:36
 */

namespace roobique\Wrappers
{

    class DatabaseWrapper
    {
        /**
         * @var bool
         */
        private $isConnected = false;

        /**
         * @var string
         *
         */
        private $db = 'roobique';

        private $connection;

        public function getConnection($collection)
        {
            $client = new MongoDB\Client(
                'mongodb://localhost:27017',
                ['readPreference' => 'secondaryPreferred']
            );

            $db = $client->selectDatabase('roobique');

            $collection = $client->selectCollection('roobique', $collection);
            $document = $collection->findOne(['_id' => 'user']);
            var_dump($document);

            $time = microtime();
            $time = explode(' ', $time);
            $time = $time[1] + $time[0];
            $finish = $time;
            $total_time = round(($finish - $start), 4);
            echo '<br><br>Page generated in '.$total_time.' seconds.';
        }

        private function connect()
        {
            if (!$this->isConnected) {

                echo 'Connected to Database';
            }else{

                die('Etwas ist schief gelaufen!');
            }

            return $this->connection;

        }
    }
}