<?php

require_once ROOT . '/models/Feedback.php';

class FeedbackController {

    public function actionAdd() {
        Feedback::addFeedback();
        $currentPage = "/feedback/add.php";
        require_once ROOT . '/views/index.php';
    }

    public function actionShow() {
        Feedback::showFeedBacks();
        $currentPage = "/feedback/index.php";
       require_once ROOT . '/views/index.php';
    }

}
