<?

namespace travel\core;

use Exception;

class Router{

    protected static $routes = array();
    protected static $route = array(); 


    public function __construct()
    {

    }

    public static function add($regexp, $route = array()){
        self::$routes[$regexp] = $route;
    
    }
    public static function getRoutes(){
        return self::$routes;
    
    }
    public static function getRoute(){
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches))
            {
                foreach($matches as $key => $value){
                    if (is_string($key)){
                        $route[$key] = $value;
                    }
                }
                if (!isset($route["action"]))
                {
                    $route["action"] = "index";
                }
                if (!isset($route["prefix"])){
                    $route["prefix"] = "";
                }
                else{
                    $route["prefix"] .= "\\";
                }
                $route["controller"] = self::upCamelCase($route["controller"]);
                self::$route = $route;                
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url){
        $url = self::removeQueryString($url);
        if (self::matchRoute($url))
        {
            $controller = 'app\controllers\\'. self::$route["prefix"] .self::$route["controller"] . 'Controller';           
            if (class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = self::lowCamelCase(self::$route["action"]) ."Action";
               
                if (method_exists($cObj, $action)){
                    $cObj->$action();
                    $cObj->getView();
                }
                else{
                    //echo "Action no found";
                    throw new Exception("Метод $controller :: $action  не найден", 404);

                }
            }
            else{
                throw new Exception("Контроллер  $controller  не найден", 404);
            }
        }
        else
        {
            // http_response_code(404);
            // include "404.php";
            throw new Exception("Страница не найдена", 404);
        }

    }

    protected static function upCamelCase($name){
        $name = str_replace("-", " ", $name);
        $name = ucwords($name);
        $name = str_replace(" ", "", $name);
        return $name;
        
    }
    protected static function lowCamelCase($name){
        return lcfirst(self::upCamelCase($name));  
    }

    protected static function removeQueryString($url){
        if ($url)
        {
            $params = explode('&', $url, 2);
            if (false === strpos($params[0], '=')){
                return rtrim($params[0], '/');
            }
            else{
                return '';
            }
        }
    }

}