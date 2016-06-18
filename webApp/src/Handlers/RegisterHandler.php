<?php
/**
 * Created by PhpStorm.
 * User: inflgl
 * Date: 01.06.2016
 * Time: 16:14
 */

namespace roobique\Handlers 
{


    use roobique\Queries\RegisterUserQuery;

    class RegisterHandler
    {
        
        private $registerQuery;

        public function __construct()
        {
            $this->registerQuery = new RegisterUserQuery();
        }

        public function execute($userData)
        {
            $this->registerQuery->execute($userData);
        }
    }
}
