<?php

require_once ROOT . '/models/Weather.php';
require_once ROOT . '/models/User.php';

class WeatherController {

    public function actionZaporizhia() {
        User::checkAuth();
        Weather::weatherShow();
        $currentPage = "/weather/index.php";
        require_once ROOT . '/views/index.php';
    }

}
