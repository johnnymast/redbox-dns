[![Build Status](https://travis-ci.org/johnnymast/redbox-dns.svg?branch=master)](https://travis-ci.org/johnnymast/redbox-dns)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Twitter URL](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&label=Contact author)](https://twitter.com/intent/tweet?text=@mastjohnny)

# Redbox-dns (NOT READY)

```PHP
$resolver = new \Redbox\DNS\Resolver();
$resolver->resolve('php.net', DNS_ALL);
print_r($resolver);

```

***output***
```bash
$ php ./example.php
Redbox\DNS\Resolver Object
(
    [storage:ArrayIterator:private] => Array
        (
            [0] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => A
                    [ip] => 72.52.91.14
                )

            [1] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => NS
                    [target] => dns2.easydns.net
                )

            ....
        )

)
```


## Unit Testing

Redbox-dns comes with a suite of tests that you can run. The tests will be automaticaly run on
[trevis-ci.com](https://travis-ci.org/johnnymast/redbox-dns) and inspected on [scrutinizer-ci.com](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master).

xxx

## Requirements

The following versions of PHP are supported by this version.

+ PHP 5.4
+ PHP 5.5
+ PHP 5.6
+ PHP 7
+ HHVM

## Development Requirements

+ Phpunit 4.6


## Author

This package is created and maintained by [Johnny Mast](https://github.com/johnnymast). If you have any questions feel free to contact me on twitter by using [@mastjohnny](https://twitter.com/intent/tweet?text=@mastjohnny) in your tweet.
 
