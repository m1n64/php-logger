## PHP logger library

This is a PHP library for logging data.

### Install

```composer
composer require vasqo/logger
```

### Usage

Display log in page:

```injectablephp
require "vendor/autoload.php"; #optional

use Vasqo\Logger\Display\Log;

$anyData = [
    "test",
    "test2",
    "test3"
];

Log::debug($anyData);
```

Print log in browser console:

```injectablephp
require "vendor/autoload.php"; #optional

use Vasqo\Logger\Console\Log;

$anyData = [
    "test",
    "test2",
    "test3"
];

Log::debug($anyData);
```

Print log in file:

```injectablephp
require "vendor/autoload.php"; #optional

use Vasqo\Logger\File\Log;

$anyData = [
    "test",
    "test2",
    "test3"
];

Log::debug($anyData);
```

### Customizable

Create your class and extends ``Base``:

```injectablephp
class MyLog extends \Vasqo\Logger\Base\Base 
{

    protected static function print($data,$type){
        echo "This is my log:".parent::createText($data, $type);
    }
}

////////////////////
Mylog::debug("Test Data");
```

### Methods

```injectablephp
use Vasqo\Logger\Display\Log;

Log::debug("data"); //basic log
Log::error("data"); //error log
Log::info("data"); //info log
Log::warning("data"); //warning log
```