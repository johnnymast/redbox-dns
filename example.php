<?php
require 'vendor/autoload.php';


$resolver = new \Redbox\DNS\Resolver();
$resolver->resolve('php.net', DNS_ALL);
print_r($resolver);

