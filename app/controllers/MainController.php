<?

namespace app\controllers;

use R;
use PHPMailer\PHPMailer\PHPMailer;
use app\models\Main;
use app\models\User;
use travel\core\base\View;
use travel\libs\Pagination;

class MainController extends AppController{

    //public $layout = "main";

    public function indexAction()
    {
        // App::$app->getList();
        $model = new User;
        // $users = App::$app->cache->get("user");
        // if (!$users){
            $userCount = R::count($model->table);
            $page = isset($_GET["page"]) ?  (int)$_GET["page"] : 1;
            $perpage = 2;
            $pagination = new Pagination($page, $perpage,$userCount);
            $start = $pagination->getStart();
            // App::$app->cache->set("user", $users);
            $users = R::findAll($model->table, "LIMIT $start, $perpage");
        // }
        $phpmailer = new PHPMailer();
        //var_dump($userCount);
        // $this->setMeta("Jopa", "Jopa 223", "Jopa, Jopa, Jopa, Jopa");
        // $meta = $this->meta;
        View::setMeta("Jopa", "Jopa 223", "Jopa, Jopa, Jopa, Jopa");
        $this->set(compact('users', 'pagination'));
        
        # code...
    }

    public function testAction(){
        if ($this->isAjax()){
            //через аякс пришлои данные 
            $model = new Main;
            $user = R::findOne("user", "id = {$_POST['id']}" );
            $this->loadView("test", compact("user"));
            die();
            
        }
        
    }


}