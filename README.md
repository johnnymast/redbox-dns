[![Build Status](https://travis-ci.org/johnnymast/redbox-dns.svg?branch=master)](https://travis-ci.org/johnnymast/redbox-dns)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johnnymast/redbox-dns/?branch=master)
[![Twitter URL](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&label=Contact author)](https://twitter.com/intent/tweet?text=@mastjohnny)

# Redbox-dns (NOT READY)

Redbox-dns could be used to retrieve dns records for a domain you wish to query for. The API offered to you extremely easy.


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

# Resolve Options (TODO)

The second parameter to the resolve method can be used to define the desired record type to return. Below is a list of the available record types.


| Type       | Record Type   | Description                |
| DNS_ALL    | ALL           | Iteratively query the name server for each available record type |
| DNS_A      | A             | IPv4 Address Resource      |
| DNS_CNAME  | CNAME         | Alias (Canonical Name) Resource |
| DNS_HINFO |  HINFO         | Host Info Resource |
| DNS_MX | MX | Mail Exchanger Resource |
| DNS_NS | NS | Authoritative Name Server Resource |
| DNS_PTR | PTR | Pointer Resource (Reverse DNS) |
| DNS_SOA | SOA | Start of Authority Resource |
| DNS_TXT | TXT | Text Resource |
| DNS_AAAA | AAAA | Pv6 Address Resource |
| DNS_SRV | SRV | Service record (SRV record) |
| DNS_NAPTR | NAPTR |  Name Authority Pointer |

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
 
