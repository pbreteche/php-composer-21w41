<?php

namespace App;

use App\Traits\DemoTrait;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class App
{
    use DemoTrait;

    public function exec()
    {
        // create a log channel
        $log = new Logger('app');
        $log->pushHandler(new StreamHandler(__DIR__.'/../var/dev.log', Logger::WARNING));

        // add records to the log
        $log->warning($this->demo());
        $log->error('Bar');
    }
}
