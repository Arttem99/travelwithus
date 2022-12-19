<?
namespace app\models;

use R;
use travel\core\base\Model;

class User extends Model{
    
    public $table = 'user';

    public $attributes = [
        "name" => "",
        "email" => "",
        "password" => "",
        "role" => 2,

    ];

    public $rules = [
        'required' => [
            ["name"],
            ["email"],
            ["password"],
        ],
        'email' => [
            ['email'],
        ],
        'lengthMin' =>[
            ["password", 6]
        ]
    ];

    public function checkUnuque(){
        $user = R::findOne('user', 'email = ? LIMIT 1', [$this->attributes["email"]]);
        if ($user){
            if ($user->email == $this->attributes["email"]){
                $this->errors["unique"][] = "Эта электроная почта уже занята!";
            }
            return false;
        }
        return true;
    }

    public function login($isAdmin = false){
        $login =!empty(trim($_POST['email'])) ? trim($_POST['email']) : null;
        
        $password =!empty(trim($_POST['password'])) ? trim($_POST['password']) : null; 
        //$password = $_POST['password'];
        if ($login && $password){
            if ($isAdmin){
                $user = R::findOne('user', 'email = ? AND role = 1 LIMIT 1', [$login]);
            }
            else{
                $user = R::findOne('user', 'email = ? LIMIT 1', [$login]);
            }
            if ($user){
                // echo '<pre>' .print_r($password,1). '</pre>';
                // echo '<pre>' .print_r($user->password,1). '</pre>'; die();
                if (password_verify($password, $user->password)){
                    foreach($user as $k => $val){
                        if ($k != 'password')
                            $_SESSION["user"][$k] = $val;
                    }
                    return true;
                }
            }
        }
        return false;
    
    }

    public static function isAdmin(){
        return (isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "1");
    }

}