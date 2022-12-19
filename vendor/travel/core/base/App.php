<?
namespace travel\core\base;

use travel\core\ErrorHandler;
use travel\core\Registry;

class App{


    public static $app;

    public function __construct()
    {
        session_start();
        self::$app = Registry::instance();
        new ErrorHandler();
    }
}