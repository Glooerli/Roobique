<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 09.02.2016
 * Time: 23:38
 */

namespace roobique\Controllers
{
    class FrontPageController extends AbstractController
    {
        public function getBody()
        {
            return $this->loadDom('/var/www/roobique/webApp/data/Pages/index.html')->saveXML();
        }
    }
}

