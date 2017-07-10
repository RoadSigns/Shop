<?php
    // Defining the database credentials
    define('DBHOST', 'localhost' );
    define('DBUSER', 'php_user01');
    define('DBPASS', 'password'  );
    define('DBNAME', 'php_db01'  );

    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    $password = crypt('password');
    $sql = "INSERT INTO `SHOP_users`(`id`, `username`, `passwd`, `email`, `firstname`, `surname`, `permissions`) VALUES (2,'zack', '$password','admin@zacklott.co.uk','zack','lott',1)";

    $result = mysqli_query($link, $sql);

    if($result){
        echo "Wahey";
    } else {
        echo "Negative";
    }