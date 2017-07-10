<?php
    require('../includes/config.php');

    $user->logInRequired();

    $productCategories = $products->listCategories();
    $productBrands     = $products->listBrands();

    $account = ucfirst($_SESSION['user']['username']);

    if ($_POST) {
        if (!empty($_POST['name'])) {
            $addedProduct = $products->addProduct($_POST['brand'], $_POST['name'], $_POST['price'], $_POST['stock'], $_POST['category'], $_POST['description']);
            if ($addedProduct) {
                header('Location: ' . ADMINURL . 'products.php');
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
                        Add a Product
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-shopping-cart"></i> Products
                        </li>
                        <li class="active">
                            <i class="fa fa-plus"></i> Add a Product
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <form name="" method="post" action="" enctype='multipart/form-data'>
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label for="username" class="col-2 col-form-label">Product Name</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $_POST['name']; ?>" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Brand</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="brand" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <?php foreach ($productBrands as $productBrand) {?>
                                        <option name="brand" value="<?php echo $productBrand->{"id"}?>"><?php echo $productBrand->{"name"}?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Category</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="category" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <?php foreach ($productCategories as $productCategory) {?>
                                        <option name="category" value="<?php echo $productCategory->{"id"}?>"><?php echo $productCategory->{"category"}?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label for="email" class="col-2 col-form-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">£</span>
                                    <input type="text" class="form-control" aria-label="Amount" value="<?php echo $_POST['price']; ?>" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label for="firstname" class="col-2 col-form-label">Stock</label>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="<?php echo $_POST['stock']; ?>" name="stock">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label class="custom-file">
                                    <input type="file" name="fileUpload" id="file" class="custom-file-input">
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                            <div class="form-group row">
                                <label for="surname" class="col-2 col-form-label">Description</label>
                                <div class="col-10">
                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"><?php echo $_POST['description']; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-10">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
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

