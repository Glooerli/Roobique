<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 18.06.2016
 * Time: 02:00
 */

namespace roobique\Queries {


    use roobique\Wrappers\DatabaseWrapper;

    abstract class AbstractQuery
    {
        
        private $databaseWrapper;
        
        protected function getDatabaseWrapper()
        {
            if ($this->databaseWrapper === null) {
                $this->databaseWrapper = new DatabaseWrapper();
            }

            return $this->databaseWrapper;
        }
        
        protected function connectCollection($collection)
        {
            return $this->getDatabaseWrapper()->getConnection($collection);
        }
    }
}