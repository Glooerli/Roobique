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
            $this->registerHandler = new RegisterHandler;
        }
        
        public function execute($instaUserDatas)
        {
            $this->registerHandler->execute($instaUserDatas);
        }

        protected function getBody()
        {
            return '';
        }

    }
}