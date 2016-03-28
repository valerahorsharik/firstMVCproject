<?php

class User {

    public static function addUser($name, $email, $password) {

        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $stmt = mysqli_prepare($mysqli, "INSERT INTO user(name,email,password) "
                . "VALUES (?,?,?)");
        mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($mysqli);
    }

    public static function auth($userId) {
        $_SESSION['userId'] = $userId;
    }

    public static function checkAuth() {
        if (isset($_SESSION['userId'])) {
            return $_SESSION['userId'];
        }
        header('Location: /mvc/login');
    }

    public static function isGuest() {
        if (isset($_SESSION['userId'])) {
            return false;
        }
        return true;
    }

    public static function logout() {
        unset($_SESSION['userId']);
        header('Location: /mvc/');
    }

    public static function getUserById($id) {
        $user = array();
        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($mysqli, "SELECT * FROM user WHERE id = $id");
        mysqli_close($mysqli);
        while ($row = mysqli_fetch_assoc($result)) {
            $user['id'] = $row['id'];
            $user['email'] = $row['email'];
            $user['name'] = $row['name'];
          //  $user['gender'] = $row['gender'];
          //  $user['bday'] = $row['bday'];
        }
        return $user;
    }

    public static function checkUserData($email, $password) {
        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($mysqli, "SELECT * FROM user 
               WHERE email = '$email ' and password = '$password'");
        mysqli_close($mysqli);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['email'] == $email && $row['password'] == $password) {
                return $row['id'];
            }
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

    public static function checkSameEmail($email) {
        $mysqli = mysqli_connect(HOST, USER, PASS, DB);
        $result = mysqli_query($mysqli, 'SELECT email FROM user');
        while ($row = mysqli_fetch_array($result)) {


            if ($row['email'] != $email) {
                return true;
            }
        }
        return false;
    }

    public static function checkPassword($password) {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

}
