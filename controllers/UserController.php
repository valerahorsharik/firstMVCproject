<?php

require_once ROOT . '/models/User.php';

class UserController {

    public function actionLogin() {
        $email = '';
        $password = '';
        $errors = false;
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (!User::checkEmail($email)) {
                $errors[] = "-Not a valid email.";
            }

            if (!User::checkPassword($password)) {
                $errors[] = "-Password must contain at least 6 characters.";
            }

            $userId = User::checkUserData($email, $password);
            if ($userId == false) {
                $errors[] = "-No such user.";
            }

            if (!$errors) {
                User::auth($userId);
                header('Location:/mvc/');
            }
        }
        $currentPage = "/user/login.php";
        require_once ROOT . '/views/index.php';
    }

    public function actionRegistration() {
        $name = '';
        $email = '';
        $password = '';
        $result = false;
        $errors = false;

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];



            if (!User::checkName($name)) {
                $errors[] = "-Name must contain at least 6 characters.";
            }
            if (!User::checkEmail($email)) {
                $errors[] = "-Not a valid email.";
            }
            if (!User::checkPassword($password)) {
                $errors[] = "-Password must contain at least 6 characters.";
            }
            if (!User::checkSameEmail($email)) {
                $errors[] = "-This email is already used.";
            }
            if (!$errors) {
                User::addUser($name, $email, $password);
                header('Location:/mvc/');
            }
        }
        $currentPage = "/user/registration.php";
        require_once ROOT . '/views/index.php';
    }

}
