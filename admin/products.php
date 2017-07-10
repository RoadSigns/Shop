<?php
    require('../includes/config.php');

    $user->logInRequired();

    $account = ucfirst($_SESSION['user']['username']);

    if (isset($_GET)){
        if (isset($_GET['productID'])) {
            $productID = intval($_GET['productID']);

            if (is_int($productID)) {
                $products->deleteProduct($productID);
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
                        List Products
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-shopping-cart"></i> Products
                        </li>
                        <li class="active">
                            <i class="fa fa-list-ul"></i> List Products
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <?php
                        $listOfProducts = $products->listAllProducts();
                        if ($listOfProducts) {
                            echo '<table class="table">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th class="hidden-sm hidden-xs">#</th>';
                            echo '<th></th>';
                            echo '<th>Product Name</th>';
                            echo '<th class="hidden-sm hidden-xs">Price(£)</th>';
                            echo '<th class="hidden-sm hidden-xs">Stock</th>';
                            echo '<th>Edit</th>';
                            echo '<th>Delete</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';

                            foreach($listOfProducts as $product) {

                                echo "<tr>";
                                echo '<th scope="row">'. $product->{"id"}.'</th>';
                                echo '<td class="hidden-sm hidden-xs"><img height="40px" width="auto" src="../content/products/'.$product->{"id"}.'.png"/></td>';
                                echo '<td>'.$product->{"name"}.'</td>';
                                echo '<td class="hidden-sm hidden-xs">£'.$product->{"price"}.'</td>';
                                echo '<td class="hidden-sm hidden-xs">'.$product->{"stock"}.'</td>';
                                echo '<td><a class="btn btn-warning btn-sm" href="edit-product.php?productid='.$product->{"id"}.'" role="button">Edit</a></td>';
                                echo '<td><a class="btn btn-danger  btn-sm" href="?productID='.$product->{"id"}.'" role="button">Delete</a></td>';
                                echo '</tr>';

                            }
                            echo '</tbody></table>';
                        }
                    ?>
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

