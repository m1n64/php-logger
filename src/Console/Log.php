<?php


namespace Vasqo\Logger\Console;


use Vasqo\Logger\Base\Base;

class Log extends Base
{

    protected static function print($data, $type)
    {
        echo "<script>console.log('".parent::createText($data, $type)."')</script>";
    }
}