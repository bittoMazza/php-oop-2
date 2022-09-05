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

    $not_customer = new NotRegisteredCustomer(18125126,'15/03/22','VIA dsdasd');

    echo 'TEST INSERIMENTO PRODOTTI';
    $customer->AddProducts(new Product('dasd','dsda','dsda',20));
    var_dump($customer);

    $customer->AddProducts((new Product('pasta','barilla','pasta',20)));
    var_dump($customer);

    $not_customer->AddProducts(new Product('nutella','ferrero','cibo',5));
    var_dump($not_customer);

    echo 'TEST CARTA DI CREDITO';
    $creditCard = new CreditCard(2132,'2021/10');
    var_dump($creditCard);


?>