<?php

    require('../includes/config.php');

    $user->logInRequired();

    $account = ucfirst($_SESSION['user']['username']);

    if ($_POST) {
        if (!empty($_POST['category'])) {
            if ($products->registerBrand($_POST['brand'])) {
                header('Location: ' . ADMINURL . 'brands.php');
            }
        }
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
                        Register a Brand
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-paint-brush"></i> Brands
                        </li>
                        <li class="active">
                            <i class="fa fa-plus"></i> Add a Brand
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <form method="post">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Add a Brand</label>
                                        <input type="text" placeholder="Enter Your Brand Here.." class="form-control" name="brand">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-10">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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

