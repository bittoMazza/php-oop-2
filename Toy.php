<?php 

require_once __DIR__.'./Product.php';

class Toy extends Product{
    protected $materials;

    public function __construct($_name,$_brand,$_category,$_price,$_target,$_materials)
    {
        parent::__construct($_name,$_brand,$_category,$_price,$_target);
        $this->materials = $_materials;

    }
}

?>