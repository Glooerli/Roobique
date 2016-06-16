<?php
  spl_autoload_register(function ($namespace) {
    $path = substr(str_replace('\\', '/', $namespace), 9);

    require '/var/www/roobique/iApp/iApp_New/' . $path . '.php';
  });
