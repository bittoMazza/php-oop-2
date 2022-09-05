<?php
    include_once __DIR__.'./RegisteredCustomer.php';
    include_once __DIR__.'./NotRegisteredCustomer.php';
    include_once __DIR__.'./Product.php';

    echo 'TEST CLASSE PRODOTTO';
    $product= new Product('ciccio','pasticcio','cibo',150);
    var_dump($product);

    echo 'TEST CLASSE CLIENTE';
    $customer = new RegisteredCustomer(6555,'15/05/25','Via emilia','ciccio@pasticcio.com','nonteladico','pasta','m','prosciutto');
    var_dump($customer);

    echo 'TEST INSERIMENTO PRODOTTI';
    $customer->AddProducts(new Product('dasd','dsda','dsda',20));
    var_dump($customer);

    $customer->AddProducts((new Product('pasta','barilla','pasta',20)));
    var_dump($customer);

?>