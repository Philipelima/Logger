<?php 
namespace Logger;

use Logger\File\File;
use Logger\Report\Report;

Class Logger 
{

    protected static string $level;
    protected static string $date;
    protected static string $time;

    protected static string $path;

    private static $acceptedLevels = ['WARNING', 'INFO', 'SUCCESS', 'ERROR'];


    public function __toString()
    {
        return "Logger is running";
    }


    protected static function startLogger()
    {
        echo PHP_EOL;
        echo "\e[0;31;42m Yeah! Logger is running on this project!                                           \e[0m\n";
        echo PHP_EOL;
    }

    

    public static function info(string $message): void
    {
        self::setLevel('info');
        self::saveLogMessage($message);
    }



    public static function warn(string $message): void
    {
        self::setLevel('warning');
        self::saveLogMessage($message);
    }

    

    public static function success(string $message): void
    {
        self::setLevel('success');
        self::saveLogMessage($message);
    }


    public static function error($message): void
    {
        self::setLevel('error');
        self::saveLogMessage($message);
    }
    

    private static function setLevel(string $level): void
    {
        $level          = strtoupper($level);
        $acceptedLevels = self::$acceptedLevels;

        if (in_array($level, $acceptedLevels)) {
            self::$level = trim($level);
        }
    }


    private static function saveLogMessage(string $message)
    {
        $date = date('Y-m-d');
        $hour = date('H:m:i');

        $level   = self::$level;
        $message = "[${date}][${hour}][${level}] $message".PHP_EOL;

        Report::save($message);
    }
    
}
