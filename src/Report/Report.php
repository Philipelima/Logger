<?php
namespace Logger\Report;

use Logger\File\File;

class Report
{

    public static function save(string $message): void
    {
        $filePath = File::getFilePath();
        file_put_contents($filePath, $message, FILE_APPEND);
    }

}