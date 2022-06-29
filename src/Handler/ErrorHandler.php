<?php
namespace Logger\Handler;

class ErrorHandler
{


    public static function setErrorHandler(string $functionName)
    {
        if(function_exists($functionName)) {
            set_error_handler($functionName);
        }
    }  

}