<?php
    include_once __DIR__  .'./Customer.php';

    class NotRegisteredCustomer extends Customer{
        protected $discount;

        function __construct($_card_code,$_card_date,$_products,$_address)
        {
            parent::__construct($_card_code,$_card_date,$_products,$_address);
            $this->discount = 0;
        }

        public function GetDiscount(){
            return $this->discount;
        }

    }
?>
