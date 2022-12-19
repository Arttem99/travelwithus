<?
namespace app\controllers\admin;

use app\models\User;
use travel\core\base\View;

class UserController extends AppController{

    public function indexAction(){
        View::setMeta("Jopa Admin", "JOPA DESC", "JOPA KEyfpasdjvksdv1");

        $test = "XYITA safasdfads";
        $data = ["test" => 23];
        $this->set([
            "test" => $test,
            "data" => $data,
        ]) ;
    }
    public function loginAction(){
        if (!empty($_POST)){
            $user = new User();
            if (!$user->login(true)){
                $_SESSION["error"] = "Проверьте ваши данные!";
            }
            if (User::isAdmin()){
                redirect("/admin/");
            }
            else{
                redirect();
            }

        }
        $this->layout = "login";
        View::setMeta("Jopa Admin", "JOPA DESC", "JOPA KEyfpasdjvksdv1");

    }

}