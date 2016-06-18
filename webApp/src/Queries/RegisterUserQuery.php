<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 18.06.2016
 * Time: 01:43
 */

namespace roobique\Queries
{

    class RegisterUserQuery extends AbstractQuery
    {
        public function execute($userData)
        {
            $this->register($userData);
        }

        private function register($userData)
        {
          
            $connection = $this->connectCollection('users');
            $connection->insert([$userData => 'Users']);

            echo "Inserted with Object ID ";
        }
    }
}