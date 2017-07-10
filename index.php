<?php
    require('includes/config.php');

    $listOfProducts = $products->listAllProducts();
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
    <link href="admin/template/assets/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="templates/css/main.css" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="admin/template/assets/vendor/fortawesome/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<body>

<div class="row col-lg-12">
        <?php include ('templates/header.php'); ?>
</div>

<?php
    if ($listOfProducts) {
        foreach ($listOfProducts as $product) {
?>
            <div class="block">

                <div class="top">
                    <ul>
                        <li></li>
                        <li>
                            <a href="brand.php?brand=<?php echo $product->{"brand"};?>">
                                <span class="converse" style="text-align: center"><?php echo $product->{"brand"};?></span>
                            </a>
                        </li>
                        <li></li>
                    </ul>
                </div>

                <div class="middle">
                    <img
                        src="content/products/<?php echo $product->{"id"};?>.png"
                        alt="pic"
                        height="150px"
                        width="auto"
                        style="object-fit: cover;"
                    />
                </div>

                <div class="bottom">
                    <div class="heading"><?php echo $product->{"name"};?></div>
                    <div class="style"><a href="category.php?category=<?php echo $product->{"category"};?>"><?php echo $product->{"category"};?></a></div>
                    <div class="price">
                        <?php
                            if ($product->{"stock"} <= 0) {
                                echo "<span style='color: red;'>SOLD OUT</span>";
                            } else {
                                echo "£".$product->{"price"};
                            }
                        ?>
                    </div>
                </div>

            </div>
<?php
        }
    }
?>

</body>
</html>