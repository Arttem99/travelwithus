<?

namespace app\controllers;

use app\models\Main;
use R;
use travel\core\base\Controller ;

class AppController extends Controller{

    public $menu;
    public $meta = [];
    public function __construct($route)
    {
        parent::__construct($route);
        $model = new Main;
        $this->menu = R::findAll("role");
    }

    protected function setMeta($title = "", $desc = "", $keywords = ""){
        $this->meta["title"] = $title;
        $this->meta["description"] = $desc;
        $this->meta["keywords"] = $keywords;
    }
}