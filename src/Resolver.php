<?php
namespace Redbox\DNS;

class Resolver extends Reflectable
{

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

        $result = dns_get_record($domain, $type, $authns, $addtl);

        if (empty($result) || $result === false) {
            return false;
        }

        list(
            $this->DNS,
            $this->NS,
            $this->ADITIONAL
            ) = [$result, $authns, $addtl];

        return true;
    }

}