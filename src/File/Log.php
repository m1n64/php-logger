<?php


namespace Vasqo\Logger\File;


use Vasqo\Logger\Base\Base;

class Log extends Base
{

    protected static function print($data, $type)
    {
        $directoryForLog = __DIR__."/logs/";

        if (!is_dir($directoryForLog)) {
            mkdir($directoryForLog);
        }

        file_put_contents($directoryForLog."$type.txt", parent::createText($data, $type));
    }
}