<?php

namespace App\Services\Cache;



class RedisService
{
    public function RedisTest(array $values): array
    {

        $redis = new \Redis();
        $redis->connect('redis', 6379);

        $redis->set('data', serialize($values), 60);

        $result = unserialize($redis->get('data'));

        return $result;
    }
}
