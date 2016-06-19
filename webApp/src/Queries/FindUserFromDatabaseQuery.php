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
        public function execute($instaUserDatas)
        {
            return $this->find($instaUserDatas);
        }

        private function find($instaUserDatas)
        {
            $connection = $this->connectCollection('Users');
            return json_encode(iterator_to_array($connection->find(array('username' => $instaUserDatas['username']), false)));
        }
    }
}