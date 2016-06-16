<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:46
 */

namespace roobique\Routers
{

    use roobique\Controllers\AbstractController;
    use roobique\Controllers\FrontPageController;
    use roobique\Controllers\LoginActionController;
    use roobique\Controllers\LoginController;
    use roobique\Controllers\ProfilePageController;
    use roobique\ValueObjects\Uri;

    class Router
    {
        /**
         * @param Uri $uri
         *
         * @return AbstractController
         */
        public function route(Uri $uri)
        {
            $path = $uri->getPath();

            switch ($path) {
                case '/roobique/webApp/':
                    return new FrontPageController();
                case '/roobique/webApp/Profile':
                    return new ProfilePageController();
                case '/roobique/webApp/login/instagram':
                    return new LoginController;
                case '/roobique/webApp/action/login':
                    return new LoginActionController;
            }
        }
    }
}