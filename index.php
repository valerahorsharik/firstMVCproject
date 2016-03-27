<?php

define('ROOT',dirname(__FILE__));
require_once (ROOT . '/app/Router.php');
require_once (ROOT . '/config/db.php');

$app = new Router();
