<?php
require 'autoload.php';

$resolver = new \Redbox\DNS\Resolver();
$resolver->resolve('google.com', DNS_MX);

foreach($resolver as $record) {
    if ($record['type'] === 'MX')
        echo $record['type'] . ' ' . $record['pri'] . ' '. $record['target']."\n";
};

