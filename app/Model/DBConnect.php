<?php
    namespace App\Model;

    use PDO;

    class DBConnect{
        private $dsn;
        private $username;
        private $password;

        public function __construct()
        {
            $this->dsn = "mysql:host=localhost;dbname=inotes;charset=utf8";
            $this->username = "root";
            $this->password = "";
        }

        public function connect()
        {
            try {
                return new PDO($this->dsn, $this->username, $this->password);
            }catch (\Exception $exception){
                die($exception->getMessage());
            }
        }
    }