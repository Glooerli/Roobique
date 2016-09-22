<?php

namespace roobique\Handlers {


    use roobique\Wrappers\DatabaseWrapper;

    class LoginRegisterHandler
    {

        private $databaseWrapper;

        public function __construct()
        {
            $this->databaseWrapper = new DatabaseWrapper();
        }

        public  function execute()
        {

        }

        private function login()
        {
            try {
                $connection =  $this->databaseWrapper->getConnection();
                $connection->
            }
        }

    }
}