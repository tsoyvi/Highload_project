<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Cache\RedisService;

class RedisController extends Controller
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
            'name' => 'Redis TEST',
            'fruitsArr' => [
                'яблоко',
                'апельсин',
                'виноград'
            ],
            'number' => 10,
            'string' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod explicabo consequuntur temporibus ipsum, quae reiciendis repellat.',
        ];

        $redisService = app(RedisService::class);
        $result = $redisService->RedisTest($values);

        var_dump($result);


        echo 'Ok';
    }
}
