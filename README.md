[![Build Status](https://travis-ci.org/johnnymast/redbox-dns.svg?branch=master)](https://travis-ci.org/johnnymast/redbox-dns)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Twitter URL](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&label=Contact author)](https://twitter.com/intent/tweet?text=@mastjohnny)

# redbox-dns (NOT READY)

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

            [2] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => NS
                    [target] => dns1.easydns.com
                )

            [3] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => NS
                    [target] => dns3.easydns.org
                )

            [4] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => NS
                    [target] => dns4.easydns.info
                )

            [5] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => SOA
                    [mname] => ns1.php.net
                    [rname] => admin.easydns.com
                    [serial] => 1449389723
                    [refresh] => 16384
                    [retry] => 2048
                    [expire] => 1048576
                    [minimum-ttl] => 2560
                )

            [6] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 38
                    [type] => MX
                    [pri] => 0
                    [target] => php-smtp2.php.net
                )

            [7] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => TXT
                    [txt] => v=spf1 ip4:72.52.91.12 ip6:2a02:cb41::8 ip4:140.211.15.143 ?all
                    [entries] => Array
                        (
                            [0] => v=spf1 ip4:72.52.91.12 ip6:2a02:cb41::8 ip4:140.211.15.143 ?all
                        )

                )

            [8] => Array
                (
                    [host] => php.net
                    [class] => IN
                    [ttl] => 375
                    [type] => AAAA
                    [ipv6] => 2a02:cb41::7
                )

        )

)
```


## Unit Testing

Redbox-dns comes with a suite of tests that you can run. The tests will be automaticaly run on
[trevis-ci.com](https://travis-ci.org/johnnymast/redbox-dns) and inspected on [scrutinizer-ci.com](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master).

xxx

## Requirements

The following versions of PHP are supported by this version.

+ PHP 5.3
+ PHP 5.4
+ PHP 5.5
+ PHP 5.6
+ PHP 7
+ HHVM

## Development Requirements

+ Phpunit 4.8


## Author

This package is created and maintained by [Johnny Mast](https://github.com/johnnymast). If you have any questions feel free to contact me on twitter by using [@mastjohnny](https://twitter.com/intent/tweet?text=@mastjohnny) in your tweet.
 
