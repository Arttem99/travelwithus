<?php

namespace travel\core\base;

use Exception;

class View {

    public $route = array();

    public $view = array();

    /** @var  $layout template */
    public $layout = array();

    public $scripts = [];

    public static $meta = ["title" => "", "description" => "", "keywords" => ""];

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function __construct($route, $layout = "", $view = "")
    {
        $this->route = $route;
        if ($layout === false){
            $this->layout = false;
        }
        else{
            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;
        
    }

    public function render($vars){
        $this->route['prefix'] = str_replace('\\','/', $this->route['prefix']);
        if (is_array($vars))
            extract($vars);
            
        $file_view = APP . "/views/{$this->route['prefix']}{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (is_file($file_view)){
             require $file_view;
        }
        else{
            // echo "<h1>VIew not found   $file_view</h1>";
            throw new Exception("Представление не найдено $file_view", 404);
        }
        $content = ob_get_clean();

        if (false !== $this->layout){
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)){
                $content = $this->cutScript($content);
                $arScripts = [];
                if (!empty($this->scripts[0])){
                    $arScripts = $this->scripts[0];
                }
               
                require $file_layout;
            }
            else{
                throw new Exception("Шаблон не найден $file_layout ", 404);
            }
        }
    }

    protected function cutScript($content)
    {
        $pattern = "#<script.*?>.*?</script>#si";
        preg_match_all($pattern, $content, $this->scripts);
        if (!empty($this->scripts)){
            $content = preg_replace($pattern, "",$content);
            return $content;
        }
    }

    public static function getMeta(){
        echo '<title>' .self::$meta['title'].'</title>';
        echo  '<meta name="description" content="'. self::$meta["description"] .'">';
        echo  '<meta name="keywords" content="'. self::$meta["keywords"] .'">';
    }

    public static function setMeta($title  = "", $description = "", $keywords = ""){
        self::$meta["title"] = $title;
        self::$meta["description"] = $description;
        self::$meta["keywords"] = $keywords;
    }

    public function getPart($file){
        $file = APP . "/views/{$file}.php";
        if (is_file($file)){           
            require_once $file;
        }
        else{
            echo "File {$file} no found...";
            // throw new Exception("Шаблон не найден $file ", 404);
        }
    }

}
