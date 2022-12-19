<?

namespace app\controllers\admin;

use app\models\User;
use travel\core\base\Controller ;

class AppController extends Controller{
    public $layout = "admin";

    public function __construct($route)
    {
        parent::__construct($route);
       //  echo '<pre>' .print_r($route,1). '</pre>';die;
        
        if (!User::isAdmin() && $route["action"] != "login"){
            redirect("/admin/user/login/");
        }
        else if (User::isAdmin() && $route["action"] == "login"){
            redirect("/admin/");
        }
    }

}