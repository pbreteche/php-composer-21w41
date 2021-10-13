<?php

namespace App;

use App\lsb\Fille;
use App\lsb\Mere;
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
        $log->warning((new Fille())->whoAmI());
        $log->warning((new Fille())->whoAmIStatic());
        $log->warning((new Mere())->whoAmI());
        $log->error('Bar');
    }
}
