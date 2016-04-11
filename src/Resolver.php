<?php
namespace Redbox\DNS;

class Resolver extends Reflectable
{
    /**
     * Resolver constructor.
     */
    public function __construct()
    {
        $this->DNS       = [];
    }

    /**
     * @param string $domain
     * @param int $type
     * @return bool
     */
    public function resolve($domain = '', $type = DNS_ANY)
    {
        if (empty($domain))
            return false;

        $this->clear();

        $result = dns_get_record($domain, $type);

        if (empty($result) || $result === false) {
            return false;
        }

        $this->DNS = $result;
        return true;
    }

}