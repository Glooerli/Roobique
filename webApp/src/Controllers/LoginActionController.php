<?php
/**
 * Created by PhpStorm.
 * User: inflgl
 * Date: 01.06.2016
 * Time: 16:01
 */

namespace roobique\Controllers {

    use roobique\ValueObjects\Uri;
    use roobique\Handlers\RegisterHandler;
    use roobique\Wrappers\DatabaseWrapper;

    class LoginActionController extends AbstractController
    {

        private $registerHandler;
        
        public function __construct()
        {
            session_start();
            $this->registerHandler = new RegisterHandler;
            $test = new DatabaseWrapper();
            $test->getConnection('images');
        }

        public function doRun()
        {
            $this->registerHandler->execute();
        }

        public function execute($test)
        {
            $this->registerHandler->execute();
        }

        protected function getBody()
        {
            return '';
        }

    }
}