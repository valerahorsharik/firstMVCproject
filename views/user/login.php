
<form class="form-signin" method="POST" role="form">
    <h2 class="form-signin-heading">Please sign in</h2>
    <?php if (isset($errors) && is_array($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sign in" ></button>
</form>