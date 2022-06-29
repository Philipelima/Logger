<?php
use Logger\Logger;

function custom_exception_handler(Throwable $exception) {
    $exceptionMessage = "Exception:[{$exception->getCode()}] {$exception->getMessage()}"; 
    Logger::error($exceptionMessage);
}