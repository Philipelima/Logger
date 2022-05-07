<?php

namespace Logger;

use Exception;

class LoggerSettings extends Logger
{

    private static $acceptedLevels = ['warning', 'info', 'success', 'error'];


    public static function settings(array $settings = [], $run = true): void
    {
        self::setPath($settings['path'] ?? __DIR__ . '/../');

        if ($run == true) {
            self::startLogger();
        }
    }


    private static function setLevel(string $level): void
    {
        $level          = strtoupper($level);
        $acceptedLevels = self::$acceptedLevels;

        if (in_array($level, $acceptedLevels)) {
            self::$level = trim($level);
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
