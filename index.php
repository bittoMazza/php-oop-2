<?php
    include_once __DIR__.'./RegistereCustomer.php';
    include_once __DIR__.'./NotRegisteredCustomer.php';
    include_once __DIR__.'./Product.php';

    $product= new Product('ciccio','pasticcio','cibo',150);
    var_dump($product);


?>