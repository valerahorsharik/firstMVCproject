<?php

define('ROOT',dirname(__FILE__));
    session_start();
require_once (ROOT . '/app/Router.php');
require_once (ROOT . '/config/db.php');

$app = new Router();
