<?php

//require_once ROOT . '/models/Weather.php';
//require_once ROOT . '/models/User.php';

class WeatherController {

    public function actionZaporizhia() {
        User::checkAuth();
        $text = file_get_contents('https://www.gismeteo.ua/weather-zaporizhzhya-78813/');
        $weather = Weather::getWeather($text);
        $img = Weather::getImg($text);
        $state = Weather::getState($text);
        $pressure = Weather::getPressure($text);
        $currentPage = "/weather/index.php";
        require_once ROOT . '/views/index.php';
    }

}
