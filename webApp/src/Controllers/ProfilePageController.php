<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:42
 */

namespace roobique\Controllers
{
    class ProfilePageController extends AbstractController
    {
        protected function getBody()
        {
            return $this->loadDom('/var/www/roobique/webApp/data/Pages/profile.html')->saveXML();
        }
    }
}

