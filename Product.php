<?php
    class Product{
        protected $id;
        protected $name;
        protected $brand;
        protected $category;
        protected $price;
        protected $target;

        function __construct($_name,$_brand,$_category,$_price,$_target)
        {   
            $this->id = rand(0,99999999);
            $this->name = $_name;
            $this->brand = $_brand;
            $this->category = $_category;
            $this->price = $_price;
            $this->target = $_target;
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
        
        public function GetTarget(){
            return $this->target;
        }
    }
?>