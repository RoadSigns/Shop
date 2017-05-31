<?php
    require ('../includes/config.php');

    // Checks if the user is logged in. If so redirect to admin.
    if ($user->loggedIn()) {
        header('Location: index.php');
    }

    // Check if the POST has been completely filled in and then run the logIn function.
    if (isset($_POST['submit']) && $_POST['submit'] == 'Submit') {

        if (isset($_POST['username'])) {

            if (isset($_POST['password'])) {
                $user->logIn($_POST['username'], $_POST['password']);
            }
        }
    }


?>
<html>
    <head></head>
    <body>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input type="text"     name="username" value="" placeholder="Username">
            <br>
          <input type="password" name="password" value="" placeholder="Password">
            <br>
          <input type="submit"   name="submit"   value="Submit">
      </form>
    </body>
</html>

