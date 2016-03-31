
<div class="text-center">

    <h2>Registration</h2>
    <?php if (isset($errors) && is_array($errors)): ?>
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<form class="form-horizontal" method="POST" action="#">
    <div class="form-group ">
        <label class="control-label col-xs-5" for="firstName">Name:</label>
        <div class="col-xs-3">
            <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?php echo $name ?>" autofocus>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-5" for="inputEmail">Email:</label>
        <div class="col-xs-3">
            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $email ?>" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-5" for="inputPassword">Password:</label>
        <div class="col-xs-3">
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
        </div>
    </div>
    <br />
    <div class="form-group">
        <div class="col-xs-offset-5 col-xs-6">
            <input type="submit" class="btn btn-primary" name="submit" value="Confirm">
            <input type="reset" class="btn btn-default" value="Clear">
        </div>
    </div>
</form>
