<?php
// psr/log  --> Common interface for logging libraries

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

class Foo
{
    
    public function doSomething()
    {
        // channel can be anything like users, orders etc,. This will print in log file like channel.LEVEL
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('bugs/info.log', Level::Debug));
        $error = [
            "message" => "this is a error message",
            "code"  => 401
        ];
        // $log->info(json_encode($error));
        $log->debug(print_r($error, true));
    }

    public function getUser()
    {
        $userLog = new Logger('user');
        $userLog->pushHandler(new StreamHandler('logs/user.log', Level::Info));
        $user = [
            "name" => "nag",
            "age" => 30
        ];
        $userLog->info('user information', $user);
        echo "User logged done";
    }
}

$foo = new Foo();
$foo->getUser();
// return $foo->doSomething();

