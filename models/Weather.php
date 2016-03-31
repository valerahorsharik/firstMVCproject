<?php

class Weather {
  

    public static function getWeather($text) {
      //  $text = file_get_contents('https://www.gismeteo.ua/weather-zaporizhzhya-78813/');
        $pattern = '|<td><span class=\'value m_temp[^>]*?>(.*?)</span>|';

        for ($i = 0; $i <= 3; $i++) {
            preg_match($pattern, $text, $arr);
            $weather[] = $arr[1];
            $text = preg_replace($pattern, "1", $text, 1);
        }
        return $weather;
    }

    public static function getImg($text) {
      //  $text = file_get_contents('https://www.gismeteo.ua/weather-zaporizhzhya-78813/');
        $pattern = '|<td class="clicon"><img class="png" src="(.*?)"|';
        for ($i = 0; $i <= 3; $i++) {
            preg_match($pattern, $text, $arr);
            $img[] = $arr[1];
            $text = preg_replace($pattern, "1", $text, 1);
        }
        return $img;
    }

    public static function getPressure($text) {
     //   $text = file_get_contents('https://www.gismeteo.ua/weather-zaporizhzhya-78813/');
        $pattern = '|<span class=\'value m_press torr\'>(.*?)</span>|';
        for ($i = 0; $i <= 3; $i++) {
            preg_match($pattern, $text, $arr);
            $pressure[] = $arr[1];
            $text = preg_replace($pattern, "1", $text, 1);
        }
        return $pressure;
    }

    public static function getState($text) {
      //  $text = file_get_contents('https://www.gismeteo.ua/weather-zaporizhzhya-78813/');
        $pattern = '|<td class="cltext">(.*?)</td>|';
        for ($i = 0; $i <= 3; $i++) {
            preg_match($pattern, $text, $arr);
            $about[] = $arr[1];
            $text = preg_replace($pattern, "1", $text, 1);
        }
        return $about;
    }

}
