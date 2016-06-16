<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 01.06.2016
 * Time: 22:36
 */

namespace roobique\Wrappers
{

    use MongoClient;
    use MongoCollection;

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
            $this->connection = new MongoClient();
            $this->connection->selectDB($this->db);
            $this->connection->selectCollection($this->db, $collection);
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