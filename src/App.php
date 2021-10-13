<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class App
{
    public function exec()
    {
        // create a log channel
        $log = new Logger('app');
        $log->pushHandler(new StreamHandler(__DIR__.'/../var/dev.log', Logger::WARNING));

        // add records to the log
        $log->warning('Foo');
        $log->error('Bar');
    }
}
