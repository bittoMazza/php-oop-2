<?php
    include_once __DIR__ .'./Product.php';

    class Customer{
        protected $card_code;
        protected $card_date;
        protected $address;
        protected $products;

        function __construct($_card_code,$_card_date,$_address,...$_products)
        {
            $this->SetCardCode($_card_code);
            $this->card_date = $_card_date;
            $this->address = $_address;
            $this->products = $_products;
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

        public function SetCardCode($card_code){
            if(is_int($card_code))
            {
                $this->card_code = $card_code;
            }
        }

        public function AddProducts(...$_products){
            $this->products = array_merge($this->products, $_products);
        }

/*         public function SetCardDate($card_date)
        {
            $current_date = date("Y/m/d");
            $interval = $current_date->date_diff($card_date);
        } */
    }
?>