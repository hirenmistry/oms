<?php
define("CUSTOM_CLASS_PATH", DOCUMENT_ROOT . '/' . FOLDER_NAME . "/classes/custom/");
define("GLOBAL_CLASS_PATH", DOCUMENT_ROOT . '/' . FOLDER_NAME . "/classes/globals/");
define("MODEL_CLASS_PATH", DOCUMENT_ROOT . '/' . FOLDER_NAME . "/classes/models/");

spl_autoload_register(function($c) {
    $path = preg_replace('#\\\(?!.*\\\)#', '/', $c) . '.php';
    
    if (file_exists($require_path = CUSTOM_CLASS_PATH . $path)) {
        include_once $require_path;
    } else if (file_exists($require_path = GLOBAL_CLASS_PATH . $path)) {
        include_once $require_path;
    } else if (file_exists($require_path = MODEL_CLASS_PATH . $path)) {
        include_once $require_path;
    }
});
