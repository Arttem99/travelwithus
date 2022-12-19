<?

namespace travel\widgets\menu;

use R;
use travel\libs\Cache;

class Menu{
    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    protected $container = "ul";
    protected $class = "menu";
    protected $table = "menu";
    protected $cache = 3600;

    public function __construct($options = [])
    {
        $this->tpl = __DIR__ . "/template/.default.php";
        $this->getOprions($options);
        $this->run();
    }

    protected function run(){
        $cache = new Cache();
        $this->menuHtml = $cache->get("menu");
        if (!$this->menuHtml){
            $this->data = R::getAssoc("SELECT * FROM `menu`");
            $this->tree = $this->getTree();
            // echo '<pre>' .print_r($this->tree,1). '</pre>';
            $this->menuHtml = $this->getMenuHtml($this->tree);
            $cache->set("menu", $this->menuHtml, $this->cache);
        }
        $this->output();
    }

    protected function getTree(){
        $tree = [];
        $data = $this->data;
        foreach($data as $id => &$field){
            if (!$field['parent']){
                $tree[$id]= &$field;
            }
            else{
                $data[$field['parent']]['childs'][$id] = &$field;
            }
        }
        return $tree;
    }
    protected function getMenuHtml($tree, $tab = "")
    {
        $str = "";        
        foreach($tree as $id => $item){
            $str .= $this->catToTemplate($item, $tab, $id);
        }
        return $str;
        # code...
    }

    protected function catToTemplate($item, $tab, $id)
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
        # code...
    }

    protected function getOprions($options){
        foreach($options as $k => $option){
            if (property_exists($this, $k)){
                $this->$k = $option;
            }
        }
    }

    protected function output()
    {
        echo "<{$this->container} class={$this->class}>";
            echo $this->menuHtml;
        echo "</{$this->container}>";
        # code...
    }
}