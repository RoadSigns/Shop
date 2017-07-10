<?php
    $brandList = $products->listBrands();
    $categoryList = $products->listCategories();
?>
<!-- jQuery -->
<script src="admin/template/assets/vendor/components/jquery/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin/template/assets/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="templates/js/nav.js"></script>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container-fluid">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="men">
                                    <ul class="nav-list list-inline">
                                        <?php
                                            foreach ($brandList as $brand) {
                                                ?>
                                                    <li><a href="brand.php?brand=<?php echo $brand->{"name"};?>"><span><?php echo $brand->{"name"};?></span></a></li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container-fluid">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="men">
                                    <ul class="nav-list list-inline">
                                        <?php
                                            foreach ($categoryList as $category) {
                                                ?>
                                                <li><a href="category.php?category=<?php echo $category->{"category"};?>"><span><?php echo $category->{"category"};?></span></a></li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin/index.php">Sign In</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>