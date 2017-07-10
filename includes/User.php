<?php
    class Users
    {
        private $link;

        /**
         * User constructor.
         */
        function __construct()
        {
            $this->link = new MyPDO();
        }

        /**
         * Logs the user into the admin section.
         *
         * @param string $user Username for the login.
         * @param string $pass Password for the login.
         */
        function logIn ($user, $pass)
        {
            $cleanPass = addslashes($pass);
            $cleanUser = addslashes($user);

            $sql  = "SELECT username, passwd AS password, permissions";
            $sql .= " FROM SHOP_users";
            $sql .= " WHERE username = :username AND permissions = 1 OR permissions = 2";

            $results = $this->link->query($sql)->bind(':username', $cleanUser)->fetchRow();

            if ($results) {

                if ($results->password == crypt($cleanPass, $results->password)) {

                    $_SESSION['user']['username']   = $results->username;
                    $_SESSION['user']['permissions'] = $results->permissions;
                    $_SESSION['approved'] = true;
                    header('Location: ' . ADMINURL);
                    exit();
                }

            } else{
                echo $this->link->getError();
            }
        }

        /**
         * Checks if the login is required
         *
         * @return bool
         */
        function loggedIn ()
        {
            if (isset($_SESSION['approved']) && $_SESSION['approved'] == true) {
                return true;
            } else {
                return false;
            }
        }

        /**
         * @return bool
         */
        function logInRequired()
        {
            if ($this->loggedIn()) {
                return true;
            } else {
                header('Location: ' . ADMINURL . 'login.php');
            }
            return false;
        }

        function logOut()
        {
            unset($_SESSION['approved']);
            header('Location: ' . ADMINURL);
            exit();
        }

        /**
         * Delete the user via their ID.
         *
         * @param $id
         * @return bool
         */
        function delete($id)
        {
            if (!$this->loggedIn()) {
                return false;
            }

            $cleanID = preg_replace("/[^0-9]/", $id);

            $table = 'CMS_user';
            $where = "id = $cleanID";

            $result = $this->link->delete($table, $where);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }


        function register($username, $password, $email, $firstname, $surname, $permission, $registeredDate)
        {
            $cleanPassword = addslashes($password);
            $encryptPassword = crypt($cleanPassword);

            $table = 'SHOP_users';
            $columns = array (
                "id" => "",
                "username" => "$username",
                "passwd" => "$encryptPassword",
                "email" => "$email",
                "firstname" => "$firstname",
                "surname" => "$surname",
                "permissions" => "$permission",
                "reigsteredDate" => "$registeredDate"
            );

            $result = $this->link->insert($table, $columns);

            if ($result) {
                return true;
            } else {
                return false;
            }

        }

        function usersInformation($id)
        {
            $sql = " SELECT * FROM SHOP_users WHERE id = :id";

            $result = $this->link->query($sql)->bind(':id', $id)->fetchRow();

            if ($result) {
                return $result;
            } else {
                return false;
            }
        }

        function updateInformation($id, $email, $firstname, $surname, $permission)
        {
            $table = 'SHOP_users';
            $columns = array(
                "id"        => "$id",
                "email"     => "$email",
                "firstname" => "$firstname",
                "surname"   => "$surname",
                "permissions" => "$permission"
            );
            $where = "id = '$id'";

            $result = $this->link->update($table, $columns, $where);

            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        
        function listUsers()
        {
            $sql  = "SELECT `id`, `username`, `email`, `firstname`, `surname`, `permissions` FROM SHOP_users";
            
            $result = $this->link->query($sql)->fetchAll();

            if ($result) {
                return $result;
            } else {
                return $this->link->getError();
            }
        }

        function listUsersWithNoPermissions()
        {
            $sql = "SELECT * FROM `SHOP_users` WHERE `permissions` = 0";
            return $this->link->query($sql)->fetchAll();
        }
    }