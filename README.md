[![Build Status](https://travis-ci.org/johnnymast/redbox-dns.svg?branch=master)](https://travis-ci.org/johnnymast/redbox-dns)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Twitter URL](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&label=Contact author)](https://twitter.com/intent/tweet?text=@mastjohnny)

# Redbox-dns (NOT READY)

Redbox-dns can be used to quickly query dns records a given domain. The API it self is extremely easy to use but you can always check out the [examples](https://github.com/johnnymast/redbox-dns/tree/master/examples) directory for some examples.



# Examples

In the examples folder you find basic examples of how to retrieve dns records. Below you find an extremely easy way of receiving the mx records for Google.com and print them out. You can find this example once again in the examples directory.


```php
$resolver = new \Redbox\DNS\Resolver();
$resolver->resolve('google.com', DNS_MX);

foreach($resolver as $record) {
    if ($record['type'] == 'MX')
        echo $record['type'] . ' ' . $record['pri'] . ' '. $record['target']."\n";
};
```

***ouput***
```bash
$ php ./mxrecords.php
MX 30 alt2.aspmx.l.google.com
MX 20 alt1.aspmx.l.google.com
MX 40 alt3.aspmx.l.google.com
MX 50 alt4.aspmx.l.google.com
MX 10 aspmx.l.google.com

```

# Resolve Options

The second parameter to the resolve method can be used to define the desired record type to return. Below is a list of the available record types.


| Type       | Record Type   | Description                                                      |
|:-----------|:--------------| :----------------------------------------------------------------|
| DNS_ALL    | ALL           | Iteratively query the name server for each available record type |
| DNS_A      | A             | IPv4 Address Resource                                            |
| DNS_CNAME  | CNAME         | Alias (Canonical Name) Resource                                  |
| DNS_HINFO  | HINFO        | Host Info Resource                                                |
| DNS_MX     | MX            | Mail Exchanger Resource                                          |
| DNS_NS     | NS            | Authoritative Name Server Resource                               |
| DNS_PTR    | PTR           | Pointer Resource (Reverse DNS)                                   |
| DNS_SOA    | SOA           | Start of Authority Resource                                      |
| DNS_TXT    | TXT           | Text Resource                                                    |
| DNS_AAAA   | AAAA          | Pv6 Address Resource                                             |
| DNS_SRV    | SRV           | Service record (SRV record)                                      |
| DNS_NAPTR  | NAPTR         | Name Authority Pointer                                           |

***Example: Retrieve all CNAME records***
```php
/* retreive all CNAME records */
$resolver->resolve('google.com', DNS_CNAME);
```

## Installation

Using [composer](https://getcomposer.org/):

```bash
$ composer require redbox/dns
```

## Installation trough archive download

If you download the package from a website (for example [github.io](https://github.com/johnnymast/redbox-dns/) or [phpclasses.org](http://www.phpclasses.org/package/9719-PHP-Quickly-retrieve-any-type-of-DNS-record-you-wish.html) or any other) you will need composer installed on your machine.
The reason for this is that Redbox-dns comes without the require vendor directory which is required to run the package.

First of all if you don't have composer installed you can find it [here](https://getcomposer.org/) follow the instructions and don't get intimidated in fact its really really easy to install.

In the this sample i will assume you have composer installed (on any machine). Go to the package root (where composer.json is located) and execute the following command.

```bash
$ composer install  --no-dev
```


## Unit Testing

Redbox-dns comes with a suite of tests that you can run. The tests will be automaticaly run on
[trevis-ci.com](https://travis-ci.org/johnnymast/redbox-dns) and inspected on [scrutinizer-ci.com](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master).

## Requirements

The following versions of PHP are supported by this version.

+ PHP 5.4
+ PHP 5.5
+ PHP 5.6
+ PHP 7
+ HHVM

## License

Redbox-dns is released under the MIT public license.

[LICENSE](https://github.com/johnnymast/redbox-dns/blob/master/LICENSE.md)

## Author

This package is created and maintained by [Johnny Mast](https://github.com/johnnymast). If you have any questions feel free to contact me on twitter by using [@mastjohnny](https://twitter.com/intent/tweet?text=@mastjohnny) in your tweet.
 
## Enjoy

 Oh and if you've come down this far, you might as well [follow me](https://twitter.com/mastjohnny) on twitter.