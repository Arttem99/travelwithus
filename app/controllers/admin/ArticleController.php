<?

namespace app\controllers\admin;

use Exception;
use FroalaEditor\Image;
use app\models\Article;
use app\models\Type;
use travel\core\base\View;

class ArticleController extends AppController{

    public function indexAction(){

        $article = new Article();
        $arArticles = $article->getAll();
        // echo '<pre>' .print_r($arArticles,1). '</pre>';
        
        $type = new Type();
        $arType = $type->getAll();
        // echo '<pre>' .print_r($arArticles,1). '</pre>'; die;
        
        $this->set(['arArticles' => $arArticles, 'arType'=>$arType]);
        View::setMeta("Статьи", "Статьи", "Статьи");

    }

    public function addAction(){       
        if (!empty($_POST)){
            $article = new Article();
            $data = $_POST;
            $data["date_create"] = date("Y-m-d H:i:s");
            $data["id_user"] = $_SESSION["user"]["id"];
            $article->load($data); 
            //echo '<pre>' .print_r($_POST,1). '</pre>';die();
            if ($article->save($article->table)){
                $_SESSION["success"] = "Статья Успешно создана";
                redirect("/admin/article/");
            }
            else{
                $_SESSION["error"] = "Ошибка! создания статьи";
            }
        }

        
        $type = new Type();
        $arType = $type->getAll();
        // echo '<pre>' .print_r($arArticles,1). '</pre>'; die;
        
        $this->set(compact('arType'));
        View::setMeta("Статьи", "Статьи", "Статьи");

    
    }
    public function uploadAction(){

        require_once ROOT .'/vendor/froala/wysiwyg-editor-php-sdk/lib/FroalaEditor.php';
        
        $project_folder = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', UPLOADS));
        
        try {
            $options = array(
                'validation' => array(
                'allowedExts' => array('jpeg', 'jpg', 'png'),
                'allowedMimeTypes' => array('image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png')
                )
            );

            // Store the image.
            $response = Image::upload($project_folder . '/', $options);
            //return the response
            echo stripslashes(json_encode($response));die();
        }
            catch (Exception $e) {
            http_response_code(404);
        }
        

       // View::setMeta("Статьи", "Статьи", "Статьи");

    
    }

    public function editAction(){
        View::setMeta("Статьи", "Статьи", "Статьи");

    
    }

    public function deleteAction(){
        View::setMeta("Статьи", "Статьи", "Статьи");

    
    }
    


}