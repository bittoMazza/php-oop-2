<?php
    include_once __DIR__  .'./Customer.php';

    class RegisteredCustomer extends Customer{
        protected $discount;
        protected $email;
        protected $password;

        function __construct($_card_code,$_card_date,$_products,$_address,$_email,$_password)
        {
            parent::__construct($_card_code,$_card_date,$_products,$_address);
            $this->discount = 20;
            $this->email = $_email;
            $this->password = $_password;

        }

        public function GetDiscount(){
            return $this->discount;
        }

        public function GetEmail(){
            return $this->email;
        }
        public function GetPassword(){
            return $this->password;
        }
    }
?>