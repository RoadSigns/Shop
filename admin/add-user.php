<?php

    require('../includes/config.php');

    $user->logInRequired();

    $account = ucfirst($_SESSION['user']['username']);

    if ($_POST) {
        $user->register();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sem6zl - Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="template/assets/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="template/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="template/assets/vendor/fortawesome/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php include ('template/mobile-header.php'); ?>
        <!-- Top Navigation -->
        <?php include ('template/header.php'); ?>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include ('template/sidebar.php'); ?>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Users
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-users"></i> Users
                        </li>
                        <li class="active">
                            <i class="fa fa-user-plus"></i> Add a User
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <form name="" method="post" action="">
                    <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="form-group row">
                            <label for="username" class="col-2 col-form-label">Username</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-2 col-form-label">Email</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-2 col-form-label">Password</label>
                            <div class="col-10">
                                <input class="form-control" type="password" value="" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-2 col-form-label">Confirm Password</label>
                            <div class="col-10">
                                <input class="form-control" type="password" value="" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstname" class="col-2 col-form-label">First Name</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" name="firstname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surname" class="col-2 col-form-label">Surname</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" name="surname">
                            </div>
                        </div>
                        <div>
                        </div>
                        <div class="form-group row">
                            <div class="col-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="template/assets/vendor/components/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="template/assets/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>

