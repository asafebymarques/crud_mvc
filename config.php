<?php

require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL","http://localhost/crud_mvc/");
    $config['dbname'] = 'crud_mvc';
    $config['host'] = '127.0.0.1';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}else{
    define("BASE_URL","http://www.onsk.online/");
    $config['dbname'] = 'crud_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],
        $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}