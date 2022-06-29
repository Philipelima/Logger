<?php

namespace Logger\Settings;

use Logger\Logger;
use Logger\File\File;
use Exception;
use Logger\Exceptions\LoggerException;
use LogicException;

class LoggerSettings extends Logger
{

    

    public static function settings(array $settings = [], $run = true)
    {
        
        self::setPath($settings['path'] ?? __DIR__ . '/../');

        if ($run == true) {
            self::startLogger();
        }

        File::createLog();
    }



    private static function setPath(string $path)
    {
        try {

            if (is_dir($path) && is_writable($path)) {

                define('LOGGER_PATH', $path);
                
                self::$path = $path;
                return true;

            } 
                
            throw new LoggerException("[LOGGER] Permission: Please, check the permissions for the path: ${path}");

        } catch (LoggerException $le) {
            echo $le->getMessage();
        }
    }



}
