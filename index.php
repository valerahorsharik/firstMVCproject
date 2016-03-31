<?php

define('ROOT',dirname(__FILE__));
    session_start();
require_once (ROOT . '/app/autoload.php');
require_once (ROOT . '/config/db.php');

$app = new Router();
