<?php

require_once ROOT . '/models/Feedback.php';
require_once ROOT . '/models/User.php';

class FeedbackController {

    public function actionAdd() {
        Feedback::addFeedback();
        $currentPage = "/feedback/add.php";
        require_once ROOT . '/views/index.php';
    }

    public function actionShow() {
        User::checkAuth();
        $feedbacks = array();
        $feedbacks = Feedback::showFeedBacks();
        $currentPage = "/feedback/index.php";
        require_once ROOT . '/views/index.php';
    }

}
