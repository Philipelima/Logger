<?php
require_once '../vendor/autoload.php';

use Logger\Settings\LoggerSettings;
use Logger\Handler\ExceptionHandler;
use Logger\Handler\ErrorHandler;

/**
 * settings  for the Logger
 */
LoggerSettings::settings([
    'path' => realpath(__DIR__.'/../')
]);


require __DIR__.'/customHandler/customErrorHandler.php';
require __DIR__.'/customHandler/customExceptionHandler.php';


ExceptionHandler::setExceptionHandler('custom_exception_handler');
ErrorHandler::setErrorHandler('custom_error_handler');





