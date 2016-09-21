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

        /**
         * @var
         * 
         */
        private $connection;

        public function getConnection($collection)
        {
            return $this->connect($collection);
        }

        private function connect($collection)
        {
            if (!$this->isConnected) {

                $client =  new \MongoDB\Driver\Manager("mongodb://localhost:27017");
                

            }else{

                die('Etwas ist schief gelaufen!');
            }

            return $this->connection;

        }
    }
}