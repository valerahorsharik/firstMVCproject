<?php
require_once ROOT . '/models/Weather.php';
echo "Weather Controller ";
class WeatherController {
     public function actionZaporizhia() {
        Weather::weatherShow();
    }
}
