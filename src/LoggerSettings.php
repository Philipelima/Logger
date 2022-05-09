<?php

namespace Logger;

use Exception;

class LoggerSettings extends Logger
{

    

    public static function settings(array $settings = [], $run = true): void
    {
        self::setPath($settings['path'] ?? __DIR__ . '/../');

        if ($run == true) {
            self::startLogger();
        }
    }



    private static function setPath(string $path): void
    {
        try {

            if (is_dir($path) && is_writable($path)) {
                self::$path = $path;
            } else {
                throw new Exception("[LOGGER] Please, check the permissions for the path: ${path}");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }



}
