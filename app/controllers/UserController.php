<?
namespace app\controllers;

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
            if ($user->login()){
                $_SESSION["success"] = "Авторизация прошла успешно!";
            }
            else{
                $data = $_POST;
                $_SESSION["form_data"] = $data;
                $_SESSION["error"] = "Проверьте введенные данные!";
            }
        }
        View::setMeta("AUTORIZATION");

    }
    public function signupAction(){
        if (!empty($_POST)){
            $user = new User();
            $data = $_POST;

            $user->load($data); 
           // echo '<pre>' .print_r($user->rules,1). '</pre>'; 
            if (!$user->validate($data) || !$user->checkUnuque()){
                $user->getErrors();
                $_SESSION["form_data"] = $data;
                redirect();
            }
            $user->attributes["password"] = password_hash($user->attributes["password"], PASSWORD_DEFAULT);
            if ($user->save("user")){
                $_SESSION["success"] = "Вы успешно зарегались";
            }
            else{
                $_SESSION["error"] = "Ошибка попробуйте позже";
            }
            

            // echo '<pre>' .print_r($user,1). '</pre>';
            
            // echo '<pre>' .print_r($_POST,1). '</pre>';
            die;
        }
        View::setMeta("REGESTRATION");
    }
    public function logoutAction(){
        if (isset($_SESSION["user"])) unset($_SESSION["user"]);
        redirect("/user/login");
    }

}