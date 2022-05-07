<?php 
namespace Logger;

Class Logger 
{

    protected static string $level;
    protected static string $date;
    protected static string $time;

    protected static string $path;


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

    
}
