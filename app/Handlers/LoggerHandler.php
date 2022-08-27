<?php

namespace App\Handlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\BubbleSortService;
use App\Services\QuickSortService;

class LoggerHandler implements LoggerHandlerInterface
{
    public function handle(): void
    {

        $time_start = date("Y-m-d H:i:s");
        Log::info('Начал работать в ' . $time_start);

        //
        $array = [1, 2, 3, 5, 6, 8, 1, 12, 15, 18, 1, 2, 3, 4, 6, 13, 15, 17]; //пузырьком -1 быстрой сортировки - 2

        $timeStart = microtime(true);

        $bubbleSortService = app(BubbleSortService::class);
        $array = $bubbleSortService->sort($array);

        $timeEnd = microtime(true);
        $time = $timeEnd - $timeStart;

        echo '<pre>';
        echo 'Сортировка пузырьком<br>';
        print_r($array);
        echo "<br>Время выполнения $time секунд\n";
        echo '</pre>';


        // sort($array);

        //
        $array = [1, 2, 3, 5, 6, 8, 1, 12, 15, 18, 1, 2, 3, 4, 6, 13, 15, 17]; //пузырьком -1 быстрой сортировки - 2

        $timeStart = microtime(true);

        $quickSortService = app(QuickSortService::class);
        $array = $quickSortService->sort($array);
        $timeEnd = microtime(true);
        $time = $timeEnd - $timeStart;

        echo '<pre>';
        echo 'Быстрая сортировка<br>';
        print_r($array);
        echo "<br>Время выполнения $time секунд\n";
        echo '</pre>';


        $time_end = date("Y-m-d H:i:s"); //меняем на DateTime();
        Log::info('Закончил работать в ' . $time_end);
    }
}
