<?php

namespace App;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Log\Writer;

class UserLogger
{

    private static $loggers = array();

    // 获取一个实例
    public static function getLogger($type )
    {
        if (empty(self::$loggers[$type])) 
        {
            self::$loggers[$type] = new Writer(new Logger($type));
            self::$loggers[$type]->useFiles (storage_path().'/logs/'. $type .'.log');
        }

        $log = self::$loggers[$type];
        return $log;
    }

    public static function deleteLog($type )
    {
        $file=storage_path().'/logs/'. $type .'.log';
        if (is_readable($file) == true)
        {
               unlink($file);
        }
     
    }
}