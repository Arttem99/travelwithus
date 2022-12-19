<?
namespace app\controllers\admin;

use travel\core\base\View;

class MainController extends AppController{

    public function indexAction(){
        View::setMeta("Jopa Admin", "JOPA DESC", "JOPA KEyfpasdjvksdv1");

        $test = "XYITA safasdfads";
        $data = ["test" => 23];
        $this->set([
            "test" => $test,
            "data" => $data,
        ]) ;
    }
    public function textAction(){
    }

}