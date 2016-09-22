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
    use roobique\Handlers\LoginRegisterHandler;
    use roobique\Queries\FetchAccessTokenFromInstagramQuery;
    use roobique\ValueObjects\Uri;
    use roobique\Wrappers\Curl;

    class LoginController extends AbstractController
    {
        private $loginAction;
        
        public function __construct()
        {
            $this->loginAction = new LoginRegisterHandler();
        }

        protected function doRun()
        {
            $config = new Configuration(__DIR__ . '/../../configs/system.ini');
            $fetchAccessTokenQuery = new FetchAccessTokenFromInstagramQuery(new Curl, new Uri($config->get('accessTokenURL')), $config->get('clientID'), $config->get('clientSecret'), $config->get('redirectUri'));
            $instaUserDataArray = ($fetchAccessTokenQuery->execute($this->getUri()->getParameter('code')));
            $instaUserArray = array(
                'InstaID' => $instaUserDataArray['user']['id'],
                'username' => $instaUserDataArray['user']['username'],
                'bio' => $instaUserDataArray['user']['bio'],
                'website' => $instaUserDataArray['user']['website'],
                'profile_picture' => $instaUserDataArray['user']['profile_picture'],
                'full_name' => $instaUserDataArray['user']['full_name']
            );
            
            $this->loginAction
        }

        protected function getBody()
        {
            return '';
        }
    }
}