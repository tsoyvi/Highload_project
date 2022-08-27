<?php

namespace App\Handlers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RecursionLoggerHandler implements LoggerHandlerInterface
{
    public function handle(): void
    {
        $strLog = '';

        $time_start = time();
        Log::info('Начал работать в '.$time_start);
        
        //$strLog .= 'Начал работать в '.$time_start;

        $this->handle();

        $time_end = time();
        Log::info('Закончил работать в '.$time_end);
       
        // $strLog .= 'Начал работать в '.$time_start;

       
    }
}
