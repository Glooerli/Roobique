<?php
  spl_autoload_register(function ($class_name) {
    list($app, $dir, $class_name) = explode('\\', $class_name);

    if(!class_exists($class_name, false)){
        require '../' . $dir . '/' . $class_name . '.php';
    }
  });
