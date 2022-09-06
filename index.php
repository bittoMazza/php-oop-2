<?php
    include_once __DIR__.'./Order.php';
    include_once __DIR__.'./RegisteredCustomer.php';
    include_once __DIR__.'./NotRegisteredCustomer.php';
    include_once __DIR__.'./Product.php';

    echo 'TEST CLASSE CLIENTE';
    $customer = new RegisteredCustomer(6555,'15/05/25','Via emilia','ciccio@pasticcio.com','nonteladico','pasta','m','prosciutto');
    var_dump($customer);


    echo 'TEST INSERIMENTO PRODOTTI';
    $customer->AddProduct(new Product('dasd','dsda','dsda',20,''));
    var_dump($customer);

    $customer->AddProduct((new Product('pasta','barilla','pasta',20,'')));
    var_dump($customer);

    echo 'TEST CARTA DI CREDITO';
    $creditCard = new CreditCard(2132,'2023/10');
    var_dump($creditCard);

    var_dump($customer->GetTotalPrice())


?>