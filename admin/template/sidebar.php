<?php ?>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#product"><i class="fa fa-fw fa-shopping-cart"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="product" class="collapse">
                        <li>
                            <a href="add-product.php"><i class="fa fa-plus"></i> Add a Product</a>
                        </li>
                        <li>
                            <a href="products.php"><i class="fa fa-list-ul"></i> List Products</a>
                        </li>
                    </ul>
                </li>

                <?php if ($_SESSION['user']['permissions'] == 1) { ?>
                <li>
                    <a href="javascript:" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="users" class="collapse">
                        <li>
                            <a href="add-user.php"><i class="fa fa-user-plus"></i> Add a User</a>
                        </li>
                        <li>
                            <a href="users.php"><i class="fa fa-user"></i> List Users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="categories.php"><i class="fa fa-fw fa-shopping-basket"></i> Categories</a>
                </li>
                <li>
                    <a href="brands.php"><i class="fa fa-fw fa-paint-brush"></i> Brands</a>
                </li>
                <!--<li>
                    <a href="settings.php"><i class="fa fa-fw fa-wrench"></i> Settings</a>
                </li>-->
                <?php }?>
            </ul>
        </div>