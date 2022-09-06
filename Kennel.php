<?php
require_once __DIR__.'./Product.php';

class Food extends Product{
    protected $materials;
    protected $dimensions;

    public function __construct($_name,$_brand,$_category,$_price,$_target,$_materials,$_dimensions)
    {
        parent::__construct($_name,$_brand,$_category,$_price,$_target);
        $this->materials = $_materials;
        $this->dimensions = $_dimensions;

    }
}

?>