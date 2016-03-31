<?php

//require_once ROOT . '/models/Feedback.php';
//require_once ROOT . '/models/User.php';

class FeedbackController {

    public function actionAdd() {
        $author = '';
        $email = '';
        $header = '';
        $feedback = '';
        $captcha = '';
        $errors = false;

        if (isset($_SESSION['userId'])) {
            $user = User::getUserById($_SESSION['userId']);
            $author = $user['name'];
            $email = $user['email'];
        }
        if (isset($_POST['add_feedback'])) {
            $author = ucfirst($_POST['author']);
            $email = $_POST['email'];
            $header = ucfirst($_POST['header']);
            $feedback = htmlspecialchars(ucfirst($_POST['feedback']));
            $captcha = $_POST['captcha'];
            if (!Feedback::checkEmail($email)) {
                $errors[] = "-Not a valid email.";
            }
            if (!Feedback::checkName($author)) {
                $errors[] = "-Name must contain at least 4 characters.";
            }
            if (!Feedback::checkHeader($header)) {
                $errors[] = "-Title must contain at least 3 characters.";
            }
            if (!Feedback::checkFeedback($feedback)) {
                $errors[] = "-Feedback too short, need at least 20 characters.";
            }
             if (!Feedback::checkCaptcha($captcha)) {
                $errors[] = "-Wrong captcha.";
            }
            if (!$errors) {
                Feedback::addFeedback($author, $email, $header, $feedback);
                if (!User::isGuest()) {
                    header('Location:/');
                } else {
                    header('Location:/feedback/add');
                }
            }
        }
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
