<?php
    class Product{
        protected $name;
        protected $brand;
        protected $category;
        protected $price;

        function __construct($_name,$_brand,$_category,$_price)
        {   
            $this->name = $_name;
            $this->brand = $_brand;
            $this->category = $_category;
            $this->price = $_price;
        }

        public function GetName(){
            return $this->name;
        }

        public function GetBrand(){
            return $this->brand;
        }
        public function GetCategory(){
            return $this->category;
        }
        public function GetPrice(){
            return $this->price;
        }
    }
?>