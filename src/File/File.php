<?php

namespace Logger\File;

use Logger\Exceptions\FileException;

class File 
{
    private static string $file;
    private static string $filePath;

    public static function createLog(): void
    {
        try {
            $directory  = Directory::createLogDirectory();
            $LoggerFile = self::createFile();

            if(!$directory || !$LoggerFile) {
                throw new FileException("[Logger] FileExeception: Error ao criar o arquivo de log \n");
            }
        } catch (FileException $fe) {
            echo $fe->getMessage();
        }
    }


    public  static function getFilePath(): string
    {
        return self::$filePath;
    }


    private static function createFile(): bool
    {
        if(is_dir(LOGGER_PATH)) {
            $file = LOGGER_PATH."/log/Logger.log";
            
            self::$file = $file;
            self::$filePath = $file;

            if(file_exists($file)) {
                return true;
            }
            file_put_contents($file, '## FILE CREATED BY LOGGER '.PHP_EOL);
            return true;
        }
        
        return false;
    }
}