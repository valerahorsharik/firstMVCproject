<?php

require_once ROOT . '/models/Weather.php';

class WeatherController {

    public function actionZaporizhia() {
        Weather::weatherShow();
        $currentPage = "/weather/index.php";
        require_once ROOT . '/views/index.php';
    }

}
