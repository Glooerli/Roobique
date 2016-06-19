<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 18.06.2016
 * Time: 10:31
 */

namespace roobique\Queries {


    class FindUserFromDatabaseQuery extends AbstractQuery
    {
        public function execute($userData)
        {
            $this->find($userData);
        }

        private function find($userData)
        {
            var_dump($userData);
            echo $userData['user']['username'];

            $connection = $this->connectCollection('Users');
            if (isset($userData['user']['username'])) {
                return($connection->find(array('username' => ($userData['user']['username']))));
            }
        }
    }
}