<?php


require_once '../vendor/autoload.php';

use Logger\Handler\ErrorHandler;

use Logger\Logger;
use Logger\Settings\LoggerSettings;

/**
 * settings  for the Logger
 * 1 - array
 */
LoggerSettings::settings([
    'path' => realpath(__DIR__.'/../')
]);




function my_error_handler($errno, $errstr, $errfile, $errline) {

    if(!( error_reporting() & $errno )) return false;
    $errstr = htmlspecialchars($errstr);

    switch ($errno) {

        case E_USER_ERROR:
            Logger::error($errstr);
            break;
        
        case E_USER_WARNING:
            Logger::warn($errstr);
            break;
        
        case E_USER_NOTICE:
            Logger::notice($errstr);
            break;

        default:
            Logger::info(" undefined error at  {$errfile} ");
            break;
    }
}


ErrorHandler::setErrorHandler('my_error_handler');




//Info message
