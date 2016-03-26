<?php

require_once ROOT . '/models/Registration.php';

class RegistrationController {

    public function actionAdd() {
        Registration::addUser();
        $currentPage = "/registration/index.php";
        require_once ROOT . '/views/index.php';
    }
    public function actionLogin() {
        Registration::login();
        $currentPage = "/registration/login.php";
        require_once ROOT . '/views/index.php';
    }

    public function actionShow() {
        $currentPage = "/registration/index.php";
        require_once ROOT . '/views/index.php';
    }

}
