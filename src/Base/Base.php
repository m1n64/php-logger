<?php


namespace Vasqo\Logger\Base;


abstract class Base
{
    private const typeOfLog = [
        "debug" => "Debug log",
        "error" => "Error log",
        "info" => "Info log",
        "warning" => "Warning log",
    ];

    protected static function createText($data, $type): string
    {
        $currentDate = date("Y:m:d h:i:s");
        $text = "[$currentDate] ".self::typeOfLog[$type].":\r\n";

        $text .= print_r($data, true)."\r\n";

        return $text;
    }

    abstract protected static function print($data, $type);

    public static function debug($data)
    {
        static::print($data, "debug");
    }

    public static function error($data)
    {
        static::print($data, "error");
    }

    public static function warning($data)
    {
        static::print($data, "warning");
    }

    public static function info($data)
    {
        static::print($data, "info");
    }
}