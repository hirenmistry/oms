<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once './includes/config.php';

$v = new ItemList();
$x = new Item();
//$x->setItemId(1)->setItemName('book')->setItemPrice(10.5)->setItemSoldOut(false)->setItemType(new ItemTypeEnum(ItemTypeEnum::Ordinary));

$v->append(new Item())->append(new Item());

print_r($v->toArray());