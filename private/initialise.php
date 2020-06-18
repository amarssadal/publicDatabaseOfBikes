<?php

    ob_start();

    session_start();

    define('PROJECT_PATH', __DIR__);
    define('PUBLIC_PATH', PROJECT_PATH . '/public');
    define('SHARED_PATH', PROJECT_PATH . '/includes');
    
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0 ,$public_end);
    define('WWW_ROOT', $doc_root);

    require_once('database.php');
    require_once('functions.php');
    
    $db = db_connect();
    $errors = [];

?>