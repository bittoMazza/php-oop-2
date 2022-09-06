<?php
    include_once __DIR__  .'./Customer.php';

    class RegisteredCustomer extends Customer{
        protected $email;
        protected $password;

        function __construct($_email,$_password)
        {
            $this->email = $_email;
            $this->password = $_password;

        }

        public function GetEmail(){
            return $this->email;
        }
        public function GetPassword(){
            return $this->password;
        }
        
        public function GetTotalPrice()
        {
            $total = parent::GetTotalPrice();
            return $total * (1 - 0.2);
        }
    }
?>