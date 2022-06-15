<?php


namespace Vasqo\Logger\Display;


use Vasqo\Logger\Base\Base;

class Log extends Base
{

    protected static function print($data, $type)
    {
        $backtrace = debug_backtrace();
        echo "
            <div id='debugInformation'
              style='display: flex;
                  flex-direction: column;
                  border: #6c6b6f 2px dotted;
                  margin: 10px;'
            >
              <div class='head'
                style='background-color: #ccd5ff;
                  padding: 10px;
                  border-bottom: #6c6b6f 2px dotted;
                  font-weight: bold;'
              >
                ".$backtrace['file']."[".$backtrace['line']."]"." 
              </div>
              <div class='body'
                style='padding: 20px 10px;'
              >
                ".parent::createText($data, $type)."
              </div>
            </div>
        ";
    }
}