<?

use travel\core\base\App;
use travel\core\Router;

$query = rtrim($_SERVER["QUERY_STRING"]);

define("DEBUG", 1); 
define("WWW", __DIR__);
define("CORE", dirname(__DIR__) . "/vendor/travel/core");
define("ROOT", dirname(__DIR__));
define("LIBS", dirname(__DIR__) . "/vendor/travel/libs");
define("APP", dirname(__DIR__) . "/app");
define("CACHE", dirname(__DIR__) . "/tmp/cache");
define("UPLOADS", dirname(__DIR__) . "/tmp/uploads");
define("LAYOUT", "blog");



require __DIR__. '/../vendor/travel/libs/functions.php';
//require '../vendor/core/Router.php';
// require '../app/controllers/Main.php';
// require '../app/controllers/Posts.php';
// require '../app/controllers/PostsNew.php';

// spl_autoload_register(function($class){
//     $file = ROOT . "/" . str_replace('\\', '/', $class) . ".php";
//    // $file = APP . "/controllers/$class.php";
//     if (is_file($file))
//     {
//         require_once $file;
//     }
// });
require __DIR__ . "/../vendor/autoload.php";

new App;

Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$', ["controller" => "Page"]);
Router::add('^page/(?P<alias>[a-z-]+)$', ["controller" => "Page", "action" => "view"]);


// Router::add('post/add', ["controller" => "Posts", "action" => "add"]);
//default route
Router::add('^admin$', ["controller" => "Main", "action" => "index", "prefix" => "admin"]);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ["prefix" =>"admin"]);

Router::add('^$', ["controller" => "Main", "action" => "index"]);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);
// if (Router::matchRoute($query)){
//     echo '<pre>' .print_r(Router::getRoutes(),1). '</pre>';
// }

