<?php
    session_start();

    // Defining the database credentials
    define('DBHOST', 'localhost' );
    define('DBUSER', 'php_user01');
    define('DBPASS', 'password'  );
    define('DBNAME', 'php_db01'  );

    // Defining the URL and Admin URL
    define('URL', 'http://learn.cf.ac.uk/webstudent/sem6zl/shop/');
    define('ADMINURL', URL . 'admin/');

    // Defining Database Prefix
    define('DB_PREFIX', 'SHOP_');

    include ('myPDO.php'     );
    include ('User.php'      );
    include ('Validation.php');
    include ('Products.php'  );

    // Declaring the classes used in the CMS
    $link       = new MyPDO();
    $user       = new Users();
    $validation = new Validator();
    $products   = new Products();