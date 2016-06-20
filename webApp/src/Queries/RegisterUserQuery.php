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
        public function execute($instaUserDatas)
        {
            $this->register($instaUserDatas);
        }

        private function register($instaUserDatas)
        {

            var_dump($instaUserDatas);
            
            $connection = $this->connectCollection('Users');
            $connection->insertOne([$instaUserDatas]);

            echo "Inserted with Object ID ";
        }
    }
}