<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Cache\MemcachedService;


class MemcachedController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $values = [
            'name' => 'Memcached TEST',
            'fruitsArr' => [
                'яблоко',
                'апельсин',
                'виноград'
            ],
            'number' => 10,
            'string' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod explicabo consequuntur temporibus ipsum, quae reiciendis repellat.',
        ];

        $memcachedService = app(MemcachedService::class);
        $result = $memcachedService->MemcachedTest($values);

        var_dump($result);

        echo 'Ok';
    }
}
