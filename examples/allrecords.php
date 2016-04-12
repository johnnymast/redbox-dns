<?php
require 'autoload.php';

$resolver = new \Redbox\DNS\Resolver();
$resolver->resolve('google.com', DNS_ALL);

/* This is a itteratable array */
print_r($resolver);

