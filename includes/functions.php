<?php
    /**
     * Logs the user into the admin section.
     *
     * @todo set up database login.
     * @todo validate the input
     * @todo set up encryption login.
     *
     * @param string $user Username for the login.
     * @param string $pass Password for the login.
     *
     * @return bool
     */
    function logIn($user, $pass)
    {
        global $link;
        $cleanPass = mysqli_real_escape_string($link, $pass);
        $cleanUser = mysqli_real_escape_string($link, $user);

        $sql  = "SELECT username, password, permissions";
        $sql .= " FROM CMS_users";
        $sql .= " WHERE username = '$cleanUser' AND permissions = 1";

        if ($result = mysqli_query($link, $sql)) {

            if (mysqli_num_rows($result) == 1) {

                $user = mysqli_fetch_assoc($result);

                if ($user['password'] == crypt($cleanPass, $user['password'])) {

                    $_SESSION['approved'] = true;
                    header('Location: ' . ADMINURL);

                } else {
                // @todo session error
                }

            } else {
                return false;
            }
        }

        return false;
    }

    /**
     * Checks if the user is logged in
     *
     * @return bool
     */
    function loggedIn()
    {
        if (isset($_SESSION['approved']) && $_SESSION['approved'] == true) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Checks if the login is required
     *
     * @return bool
     */
    function logInRequired()
    {
        if (loggedIn()) {
            return true;
        } else {
            header('Location: ' . ADMINURL . 'login.php');
        }
        return false;
    }

    /**
     * Logs the user out of the CMS
     */
    function logOut()
    {
        unset($_SESSION['approved']);
        header('Location: ' . ADMINURL);
        die();
    }

    /*
     * @todo set up register user.
     */
    function registerUser()
    {

    }

    /*
     * @todo set up forgotten Password Email message
     */
    function forgottenPasswordEmail()
    {

    }

    /*
     * @todo set up recovery Questions.
     */
    function forgottenPasswordQuestions()
    {

    }

    /*
     * @todo allow user to change password.
     */
    function changePassword()
    {

    }