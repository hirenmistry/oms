<?php

spl_autoload_register(function($c) {
    $path = preg_replace('#\\\(?!.*\\\)#', '/', $c) . '.php';
    $prefix1 = $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER_NAME . "/classes/";
    $prefix2 = $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER_NAME . "/globals/";
    $prefix3 = $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER_NAME . "/models/";

    echo $require_path = $prefix1 . $path;
    if (file_exists($require_path = $prefix1 . $path)) {
        include_once $require_path;
    } else if (file_exists($require_path = $prefix2 . $path)) {
        include_once $require_path;
    } else if (file_exists($require_path = $prefix3 . $path)) {
        include_once $require_path;
    }
});
