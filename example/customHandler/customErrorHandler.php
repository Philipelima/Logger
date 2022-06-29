<?php

use Logger\Logger;

function custom_error_handler($errno, $errstr, $errfile, $errline) {

    if(!( error_reporting() & $errno )) return false;

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

