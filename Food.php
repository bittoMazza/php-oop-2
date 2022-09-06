<?php
require_once __DIR__.'./Product.php';

class Food extends Product{
    protected $ingredients;
    protected $expiringDate;

    public function __construct($_name,$_brand,$_category,$_price,$_target,$_ingredients,$_expiringDate)
    {
        parent::__construct($_name,$_brand,$_category,$_price,$_target);
        $this->ingredients = $_ingredients;
        $this->expiringDate = $_expiringDate;

    }
}

?>