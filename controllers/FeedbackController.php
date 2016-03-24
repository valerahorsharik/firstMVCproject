<?php
require_once ROOT . '/models/Feedback.php';
echo "Feedback Controller ";
class FeedbackController {
     public function actionAdd() {
        Feedback::addFeedback();
    }
    public function actionShow() {
        Feedback::showFeedBacks();
    }
}
