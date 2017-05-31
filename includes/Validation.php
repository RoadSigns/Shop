<?php


    interface Validation
    {
        static function valid($argument);
        function alreadyExists($argument);
    }

    class EmailValidation implements Validation
    {
        private $link;

        /*
         * Email Validation constructor
         */
        protected function __construct()
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
        public static function valid($argument)
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
            if (!EmailValidation::valid($argument)) {
                // @todo send back error messages
            } else {

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
        protected function __construct()
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
        public static function valid($username)
        {

            if (strlen($username) <= 3) {
                return false;
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