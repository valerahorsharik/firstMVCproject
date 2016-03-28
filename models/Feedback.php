<?php

class Feedback {

    public static function addFeedBack() {
        
    }

    public static function showFeedBacks() {
        $feedbacks = array();
        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($mysqli, "SELECT * FROM feedback ");
        mysqli_close($mysqli);
        $i=0;
        while ($row = mysqli_fetch_assoc($result)){
            $feedbacks[$i]['id'] = $row['id'];
            $feedbacks[$i]['author'] = $row['author'];
            $feedbacks[$i]['header'] = $row['header'];
            $feedbacks[$i]['content'] = $row['content'];
            $feedbacks[$i]['date'] = $row['date'];
            $i++;
        }
        return $feedbacks;
    }

}
