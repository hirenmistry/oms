<?php

spl_autoload_register(function($c) {
    $path = preg_replace('#\\\(?!.*\\\)#', '/', $c) . '.php';
    $classpath = $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER_NAME . "/classes/";
    $globalpath = $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER_NAME . "/globals/";
    $modelpath = $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER_NAME . "/models/";

    if (file_exists($require_path = $classpath . $path)) {
        include_once $require_path;
    } else if (file_exists($require_path = $globalpath . $path)) {
        include_once $require_path;
    } else if (file_exists($require_path = $modelpath . $path)) {
        include_once $require_path;
    }
});
