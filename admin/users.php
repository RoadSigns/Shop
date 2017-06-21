<?php
    require('../includes/config.php');

    $user->logInRequired();

    $user = ucfirst($_SESSION['user']['username']);
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
                            <i class="fa fa-user"></i> List Users
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">

                    <form role="form">

                        <div class="form-group">
                            <label>Text Input</label>
                            <input class="form-control">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                        <div class="form-group">
                            <label>Text Input with Placeholder</label>
                            <input class="form-control" placeholder="Enter text">
                        </div>

                        <div class="form-group">
                            <label>Static Control</label>
                            <p class="form-control-static">email@example.com</p>
                        </div>

                        <div class="form-group">
                            <label>File input</label>
                            <input type="file">
                        </div>

                        <div class="form-group">
                            <label>Text area</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Checkboxes</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">Checkbox 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">Checkbox 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="">Checkbox 3
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Inline Checkboxes</label>
                            <label class="checkbox-inline">
                                <input type="checkbox">1
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox">2
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox">3
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Radio Buttons</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Inline Radio Buttons</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                            </label>
                        </div>

                        <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Multiple Selects</label>
                            <select multiple class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>

                    </form>

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

