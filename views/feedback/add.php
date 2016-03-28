<h2>Post feedback</h2>
<?php if (isset($errors) && is_array($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
<form action="#"method="POST">
    <label for="name" >Name: </label>
    <input type="text" name="author" id="author" value="<?php echo $author; ?>" placeholder="Name"><br/>
    <label for="email" >Email: </label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email"><br/>
    <label for="header" >Title: </label>
    <input type="text" name="header" id="header" value="<?php echo $header; ?>" placeholder="Title"><br/>
    <label for="content" >Feedback: </label>
    <input type="text" name="feedback" id="feedback" value="<?php echo $feedback; ?>" placeholder="Content"><br/>
    <label for="captcha" >Captcha: </label>
    <img src="/mvc/app/captcha.php" />
    <input  type="text" name="captcha" id="captcha" />	<br/>
    <input type="submit" name="add_feedback" value="Send feedback">
</form>