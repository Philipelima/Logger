<?php 
namespace Logger;

Class Logger 
{

    protected static string $level;
    protected static string $date;
    protected static string $time;

    protected static string $path;

    private static $acceptedLevels = ['warning', 'info', 'success', 'error'];


    public function __toString()
    {
        return "Logger is running";
    }



    
    protected static function startLogger()
    {
        echo PHP_EOL;
        echo "\e[0;31;42m Yeah! Logger  0.1.0 is running on this project! \e[0m\n";
        echo PHP_EOL;
    }

    
    private static function setLevel(string $level): void
    {
        $level          = strtoupper($level);
        $acceptedLevels = self::$acceptedLevels;

        if (in_array($level, $acceptedLevels)) {
            self::$level = trim($level);
        }
    }
    
}
