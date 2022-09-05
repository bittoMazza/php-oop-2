<?php
    include_once __DIR__.'./RegisteredCustomer.php';
    include_once __DIR__.'./NotRegisteredCustomer.php';
    include_once __DIR__.'./Product.php';

    $product= new Product('ciccio','pasticcio','cibo',150);
    var_dump($product);

    $customer = new RegisteredCustomer(6555,'15/05/25','Via emilia','ciccio@pasticcio.com','nonteladico','pasta','m','prosciutto');
    var_dump($customer);

    $customer->AddProducts('nome_prodott','dsda','dsad','dsdas')

?>