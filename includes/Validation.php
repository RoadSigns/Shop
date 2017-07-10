<?php


    interface Validation
    {
        function valid($argument);
        function alreadyExists($argument);
    }

    class Validator
    {
        private $email;
        private $username;

        function __construct()
        {
           $this->username = new UsernameValidation();
           $this->email    = new EmailValidation();
        }

        function checkEmail($email)
        {
            if ($this->email->valid($email)) {
                if ($this->email->alreadyExists($email)) {
                    return "Email address already exists.";
                } else {
                    return false;
                }
            } else {
                return "Invalid Email Address.";
            }
        }
    }

    class EmailValidation implements Validation
    {
        private $link;

        /*
         * Email Validation constructor
         */
        public function __construct()
        {
            $this->link = new MyPDO();
        }

        /*
         * Checks if the email address is valid
         *
         * @param string $email
         *
         * @return bool
         */
        public function valid($argument)
        {
            // Checking if the Email Address is valid
            if (!filter_var($argument, FILTER_VALIDATE_EMAIL)) {
                return false;
            } else {
                return true;
            }
        }

        /*
         * Checks if the email already exists in the database
         *
         * @param string $email
         *
         * @return bool
         */
        public function alreadyExists($argument)
        {
            $sql = "SELECT COUNT(*) AS Total FROM `SHOP_users` WHERE `email` = ':email'";

            $result = $this->link->query($sql)->bind(':email', $argument)->fetchRow();

            if ($result <= 1) {
                return true;
            } else {
                return false;
            }

        }
    }

    class UsernameValidation implements Validation
    {
        private $link;

        /*
         * Username Validation Constructor
         *
         * @return type $this->link
         */
        public function __construct()
        {
            $this->link = new MyPDO();
        }

        /*
         * Checks if the Username is a valid Username
         *
         * @param string $username
         *
         * @return bool
         */
        public function valid($username)
        {

            if (strlen($username) <= 3) {
                return false;
            } else {
                return true;
            }
        }

        /*
         * Checks if the Username already exists in the database.
         *
         * @param string $username
         *
         * @return bool
         */
        public function alreadyExists($argument)
        {
            // TODO: Implement alreadyExists() method.
        }
    }