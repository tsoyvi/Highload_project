<?php

namespace App\Http\Controllers;

use App\Handlers\LoggerHandlerInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Handlers\LoggerHandler;
use App\Handlers\RecursionLoggerHandler;

// class LoggerController implements LoggerControllerInterface

class LoggerController extends Controller
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function __construct(private LoggerHandlerInterface $handler) {}

    public function index(Request $request)
    {

        //$loggerHandler = app(LoggerHandler::class);
        $loggerHandler = new LoggerHandler;
        $status = $loggerHandler->handle();



        $result = 'Ok';

        return $result;
    }


    public function recursion(Request $request)
    {

        $recursionloggerHandler = new RecursionLoggerHandler;
        $status = $recursionloggerHandler->handle();


        $result = 'Ok';
        return $result;
    }
    
}
