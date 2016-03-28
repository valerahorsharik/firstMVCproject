<?php

class Feedback {

    public static function addFeedBack($author, $email, $header, $content) {
        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = mysqli_prepare($mysqli, "INSERT INTO feedback(author,email,header,content) "
                . "VALUES (?,?,?,?)");
        mysqli_stmt_bind_param($stmt, 'ssss', $author, $email, $header, $content);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($mysqli);
    }

    public static function showFeedBacks() {
        $feedbacks = array();
        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($mysqli, "SELECT * FROM feedback ORDER BY date DESC");
        mysqli_close($mysqli);
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $feedbacks[$i]['id'] = $row['id'];
            $feedbacks[$i]['email'] = $row['email'];
            $feedbacks[$i]['author'] = $row['author'];
            $feedbacks[$i]['header'] = $row['header'];
            $feedbacks[$i]['content'] = $row['content'];
            $feedbacks[$i]['date'] = $row['date'];
            $i++;
        }
        return $feedbacks;
    }

    public static function checkCaptcha($captcha) {
        if ($_SESSION['captcha'] == $captcha) {
            return true;
        }
        return false;
    }

    public static function checkName($name) {
        if (strlen($name) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkHeader($header) {
        if (strlen($header) >= 3) {
            return true;
        }
        return false;
    }

    public static function checkFeedback($feedback) {
        if (strlen($feedback) >= 20) {
            return true;
        }
        return false;
    }

}
