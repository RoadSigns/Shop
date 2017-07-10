<?php
    require ('../includes/config.php');

    // Checks if the user is logged in. If so redirect to admin.
    if ($user->loggedIn()) {
        header('Location: index.php');
    }

    // Check if the POST has been completely filled in and then run the logIn function.
    if (isset($_POST['submit']) && $_POST['submit'] == 'Submit') {

        if (isset($_POST['username'])) {

            if (isset($_POST['password'])) {
                $user->logIn($_POST['username'], $_POST['password']);
            }
        }
    }


?>
<html>
    <head>
        <!-- Bootstrap Core CSS -->
        <link href="template/assets/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="template/css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="template/assets/vendor/fortawesome/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style>
            body {
                background: url(template/img/login/<?php echo rand(1,5); ?>.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .panel-default {
                opacity: 0.9;
                margin-top:30px;
            }
            .form-group.last { margin-bottom:0px; }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-lock"></span> Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group">
                                <label for="nokp" class="col-sm-3 col-xs-12 control-label">
                                    Username</label>
                                <div class="col-sm-9">
                                    <input type="text"     name="username" value="" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nopend" class="col-sm-3 col-xs-12 control-label">
                                    Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password" value="" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group last">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-success btn-sm">
                                        Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    <form action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?><!--" method="post">-->
<!--          <input type="text"     name="username" value="" placeholder="Username" required>-->
<!--            <br>-->
<!--          <input type="password" name="password" value="" placeholder="Password" required>-->
<!--            <br>-->
<!--          <input type="submit"   name="submit"   value="Submit">-->
<!--      </form>-->
    </body>
</html>