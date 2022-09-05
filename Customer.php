<?php
    class Customer{
        protected $card_code;
        protected $card_date;
        protected $products;
        protected $address;

        function __construct($_card_code,$_card_date,$_products,$_address)
        {
            $this->card_code = $_card_code;
            $this->card_date = $_card_date;
            $this->products = $_products;
            $this->address = $_address;
        }

        public function GetCardCode(){
            return $this->card_code;
        }

        public function GetCardDate(){
            return $this->card_date;
        }
        public function GetProducts(){
            return $this->products;
        }
        public function GetAddress(){
            return $this->address;
        }
    }
?>