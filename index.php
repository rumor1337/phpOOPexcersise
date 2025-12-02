<?php

    require_once "bank.php";

    $user = new BankAccount('Edijs', 1000);
    
    $user->withdraw(100);
    $user->deposit(1999);
    $user->printInfo();

    $user2 = new BankAccount('sjidE', 999);
    
    $user2->withdraw(10000);
    $user2->deposit(19929);
    $user2->printInfo();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        
    </body>
</html>