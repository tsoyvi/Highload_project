<?php

namespace App\Services\Cache;



class MemcachedService
{
    public function MemcachedTest(array $values): array
    {

        $memcached = new \Memcached();
        $memcached->addServer('memcached', 11211, 60);

        $memcached->setMulti($values);

        $result = $memcached->getMulti(array_keys($values));

        return $result;
    }
}
