<?php
//$db = new PDO("mysql:host=db;dbname=myDb;port=3306;charset=UTF8", "user", "test");

include_once ('src/Currency.php');
include_once ('src/Money.php');


$currency   = new Currency('USD');
$currency2  = new Currency('USD');

$money      = new Money(10, $currency->getIsoCode());
$money2     = new Money(10, $currency2->getIsoCode());

echo $currency->getIsoCode();
echo '<BR>';
echo $currency2->getIsoCode();

echo '<hr>';
echo $money->add($money2);
