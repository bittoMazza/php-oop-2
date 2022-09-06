<?php
    include_once __DIR__ .'./Product.php';
    include_once __DIR__ .'./CreditCard.php';

    class Customer{
        protected $cart = [];


        public function Getcart(){
            return $this->cart;
        }

        public function GetTotalPrice()
        {
            $sum = 0;
            foreach($this->cart as $product)
            {
                $sum = $sum + $product->GetPrice();
            }
            return $sum;
        }
        
        public function AddProduct($product){
            if(is_a($product,"Product",true))
            {
                array_push($this->cart,$product);
            }
        }

    }
?>