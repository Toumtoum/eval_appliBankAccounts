<?php

//Setting ob_start-ob_flush preventing issues with potential use of header location

ob_start();

//Sart session

session_start();


define('PATH','/Applications/MAMP/htdocs/PHP/poo_phpSemaine7_evaluationBlanche/appli_handleVehicule');

// LOAD CLASS

  function loadClass($class){

    if(file_exists(PATH .'/models/entites/'.$class.'.php')) {
        require_once PATH .'/models/entites/'.$class.'.php';

    }else {
        require_once PATH .'/models/'.$class.'.php';
    }
  }

  spl_autoload_register('loadClass');

// Connection to DB and instancing accountsManager.php

require_once PATH .'/models/connectionDb.php';

$db = connection();

$manager = new accountsManager($db);


// Include vue

include PATH .'/vues/header.php';
