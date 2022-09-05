<?php
    include_once __DIR__ .'./Product.php';

    class Customer{
        protected $address;
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

        public function AddProducts($_product){
            array_push($this->products,$_product);
        }


    }
?>