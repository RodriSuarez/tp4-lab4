<?php
    require_once('config.php');
    spl_autoload_register(function($className){
        
        $fileName = ROOT .  $className . '.php';
        require_once($fileName);
    }); 