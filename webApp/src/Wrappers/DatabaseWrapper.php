<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 01.06.2016
 * Time: 22:36
 */

namespace roobique\Wrappers
{
    use MongoDB;

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
            $this->connect($collection);
            $result = $this->connection->find( [ 'username' => 'janos_imhof']);
            foreach ($result as $entry) {
                echo $entry['_id'], ': ', $entry['username'];
            }

        }

        private function connect($collection)
        {
            if (!$this->isConnected) {
                $client = new MongoDB\Client('mongodb://localhost:27017');
                $this->connection = $client->selectDatabase('roobique')->selectCollection($collection);
                echo 'connected';
            }else{

                die('Etwas ist schief gelaufen!');
            }

            return $this->connection;

        }
    }
}