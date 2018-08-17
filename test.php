<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once './includes/config.php';

$v = new ItemList();

$x = 2;

$v->append($x);

print_r($v->getArrayCopy());





