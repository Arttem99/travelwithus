<?

namespace travel\core\base;


abstract class Controller{

    public $route = array();
    public $view;

    public $layout;

    public $vars = array();

    public function __construct($route)
    {   
    
        $this->route = $route;
        $this->view = $route["action"];       
        // include APP . "/views/{$route['controller']}/{$this->view}.php";
    }

    public function getView(){
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
        # code...
    }

    public function isAjax(){
        return isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && $_SERVER["HTTP_X_REQUESTED_WITH"] === "XMLHttpRequest";
    
    }

    public function loadView($view, $vars = []){ // можно в переменую view - Main/test
        extract($vars);
        require APP . "/views/{$this->route['controller']}/{$view}.php";    
    }



}