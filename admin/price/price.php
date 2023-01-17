<?php

error_reporting(E_ALL); 
ini_set("display_errors", 1);

require_once __DIR__ . '/../../app/config.php';
require_once __DIR__ . '/../app/lib/Core.php';
require_once __DIR__ . '/../app/models/Price.php';

$obj = new Price();
$obj->truncate('angara');
$obj->price_sol();
