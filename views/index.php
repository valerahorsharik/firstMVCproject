<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="/mvc/tmp/css/bootstrap.css" rel="stylesheet">
        <link href="/mvc/tmp/css/bootstrap-theme.css" rel="stylesheet">
        <link href="/mvc/tmp/css/style.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/mvc/">Test work</a>
                </div>
                <div class="collapse navbar-collapse ">
                    <ul class="nav navbar-nav pull-right">



<?php if (User::isGuest()): ?>
                        <li <?php if ($_SERVER['REQUEST_URI'] == '/mvc/login') echo 'class="active"'; ?>><a href="/mvc/login">Log-in</a></li>
                        <li <?php if ($_SERVER['REQUEST_URI'] == '/mvc/registration') echo 'class="active"'; ?>><a href="/mvc/registration">Registration</a></li>
<?php else: ?>                        
                        <li><a href="/mvc/logout">Exit</a></li>
<?php endif; ?>
                        <li <?php if ($_SERVER['REQUEST_URI'] == '/mvc/weather') echo 'class="active"'; ?>><a href="/mvc/weather">Weather</a></li>
                        <li <?php if ($_SERVER['REQUEST_URI'] == '/mvc/feedback/add') echo 'class="active"'; ?>><a href="/mvc/feedback/add">Feedback</a></li>
                        <li <?php if ($_SERVER['REQUEST_URI'] == '/mvc/feedback' || $_SERVER['REQUEST_URI'] == '/mvc/') echo 'class="active"'; ?>><a href="/mvc/feedback">Reviews</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">

            <?php include_once($currentPage); ?>

        </div>
        <div id="footer">
            <div class="container ">
                <p class="text-muted text-center  ">Code example by Valera Horsharik &#169; 2016</p>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/mvc/tmp/js/bootstrap.js"></script>
    </body>
</html>