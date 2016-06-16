<?php
/**
 * Created by PhpStorm.
 * User: inflgl
 * Date: 01.06.2016
 * Time: 16:14
 */

namespace roobique\Handlers 
{

    use roobique\Wrappers\DatabaseWrapper;

    class RegisterHandler
    {
        private $databaseWrapper;

        public function __construct()
        {
            $this->databaseWrapper = new DatabaseWrapper;
        }

        public function execute()
        {
            $this->databaseWrapper->getMongo();
        }
    }
}
