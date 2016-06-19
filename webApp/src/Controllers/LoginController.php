<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 23.02.2016
 * Time: 22:44
 */

namespace roobique\Controllers
{

    use roobique\Configuration;
    use roobique\Queries\FetchAccessTokenFromInstagramQuery;
    use roobique\ValueObjects\Uri;
    use roobique\Wrappers\Curl;

    class LoginController extends AbstractController
    {
        private $loginAction;
        
        public function __construct()
        {
            $this->loginAction = new LoginActionController;
        }

        protected function doRun()
        {
            $config = new Configuration(__DIR__ . '/../../configs/system.ini');
            $fetchAccessTokenQuery = new FetchAccessTokenFromInstagramQuery(new Curl, new Uri($config->get('accessTokenURL')), $config->get('clientID'), $config->get('clientSecret'), $config->get('redirectUri'));
            $instaUserDataArray = ($fetchAccessTokenQuery->execute($this->getUri()->getParameter('code')));
            var_dump($instaUserDataArray);
            $instaUserDatas = array(

            );
            $this->loginAction->execute($instaUserDatas);
        }

        protected function getBody()
        {
            return '';
        }
    }
}