<?php
require 'vendor/autoload.php';


$resolver = new \Redbox\DNS\Resolver();
$resolver->resolve('php.net', DNS_A);


print_r($resolver);
//$resolver[] = 'abc';
//print_r($resolver);
foreach($resolver as $record) {
//    print_r($record);
}
