<?php
/**
 * Created by PhpStorm.
 * User: inflgl
 * Date: 01.06.2016
 * Time: 16:14
 */

namespace roobique\Handlers 
{


    use roobique\Queries\FindUserFromDatabaseQuery;
    use roobique\Queries\RegisterUserQuery;

    class RegisterHandler
    {
        
        private $registerQuery;
        private $findQuery;

        public function __construct()
        {
            $this->registerQuery = new RegisterUserQuery();
            $this->findQuery = new FindUserFromDatabaseQuery();
        }

        public function execute($instaUserDatas)
        {
            $test = $this->findQuery->execute($instaUserDatas);
            echo $test;
            //$this->registerQuery->execute($instaUserDatas);
        }
    }
}
