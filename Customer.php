<?php
    include_once __DIR__ .'./Product.php';
    include_once __DIR__ .'./CreditCard.php';

    class Customer{
        protected $address;
        protected $credit_card;
        protected $products = [];

        function __construct($_address)
        {
            $this->address = $_address;
        }

        public function GetProducts(){
            return $this->products;
        }
        public function GetAddress(){
            return $this->address;
        }

        public function SetCreditCard($_credit_card){
            $this->credit_card = $_credit_card;
        }

        public function AddProducts($_product){
            array_push($this->products,$_product);
        }
    }
?>