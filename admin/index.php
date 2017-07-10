<?php
    require('../includes/config.php');

    $user->logInRequired();

    $account = ucfirst($_SESSION['user']['username']);

    $soldOldProducts = $products->soldOutProducts();
    $uselessUsers     = $user->listUsersWithNoPermissions();
    $amountOfProductsPerCategory = $products->totalProductsPerCategory();
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
                        Dashboard
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i>Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <h1>Add New Features</h1>
                        <a href="add-user.php">
                            <button class="col-lg-3 col-xs-12 btn btn-success">
                                New User
                            </button>
                        </a>

                        <a href="add-product.php">
                            <button class="col-lg-3 col-lg-offset-1 col-xs-12 btn btn-warning">
                                New Product
                            </button>
                        </a>

                        <a href="add-brand.php">
                            <button class="col-lg-3 col-lg-offset-1 col-xs-12 btn btn-danger">
                                New Brand
                            </button>
                        </a>
                    </div>
                    <div class="row">
                        <h1>Users With No Permissions</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($uselessUsers as $uselessUser) {
                                echo "<tr>";
                                echo '<th scope="row">'. $uselessUser->{"id"}.'</th>';
                                echo '<td>'.$uselessUser->{"username"}.'</td>';
                                echo '<td><a class="btn btn-warning btn-sm" href="edit-user.php?id='.$uselessUser->{"id"}.'" role="button">Edit</a></td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <h1>Sold Out Products</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($soldOldProducts as $soldOutProduct) {
                                echo "<tr>";
                                echo '<th scope="row">'. $soldOutProduct->{"id"}.'</th>';
                                echo '<td>'.$soldOutProduct->{"name"}.'</td>';
                                echo '<td><a class="btn btn-warning btn-sm" href="edit-product.php?productid='.$soldOutProduct->{"id"}.'" role="button">Edit</a></td>';
                                echo '<td><a class="btn btn-danger  btn-sm" href="?productID='.$soldOutProduct->{"id"}.'" role="button">Delete</a></td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <h1>Amount of Products Per Category</h1>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Number of Products</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($amountOfProductsPerCategory as $categoryInfo) {
                                echo "<tr>";
                                echo '<th scope="row">'. $categoryInfo->{"category"}.'</th>';
                                echo '<td>'.$categoryInfo->{"Total"}.'</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
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

