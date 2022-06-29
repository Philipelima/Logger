<?php
namespace Logger\Handler;

class ExceptionHandler
{
   public static function setExceptionHandler(string $functionName)
   {
       if(function_exists($functionName)) {
           set_exception_handler($functionName);
       }
   } 
}