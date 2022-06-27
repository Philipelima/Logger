<?php
namespace Logger\File;

class Directory 
{
    public static function createLogDirectory(): bool
    {
        
        if(is_dir(LOGGER_PATH)) {
           
            $logPath = LOGGER_PATH."/log";
 
            if(is_dir($logPath)) return true;

            if(!is_dir($logPath)){
                 mkdir($logPath);
                 return true;
            }

            return false;
        }
        return false;
    }
}