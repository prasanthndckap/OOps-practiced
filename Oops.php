<?
require 'transaction.php';

//classes & objects

//we can also call the class using class
//$total = 'transaction';
// classes & objects
$transactions = new transaction (200,'transaction 1');




$transactions->addTax(8);
    $transactions->ApplyDiscount(5);
$transactions->getAmount();
var_dump($transactions);

