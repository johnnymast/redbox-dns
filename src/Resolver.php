<?php
namespace Redbox\DNS;

class Resolver extends \ArrayIterator
{

    /**
     * Clear the array
     */
    public function clear()
    {
        $this->rewind();
        $num = $this->count();

        for ($i = 0; $i < $num; $i++) {
            $this->offsetUnset($i);
        }
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

        if (empty($result) === true || $result === false) {
            return false;
        }

        foreach ($result as $record) {
            $this->append($record);
        }

        return true;
    }

}