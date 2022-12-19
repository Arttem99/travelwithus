<?
namespace app\models;

use R;
use travel\core\base\Model;

class Article extends Model{
    
    public $table = 'articles';

    public $attributes = [
        "name" => "",
        "active" => "",
        "data_create" => "",
        "preview_photo" => "",
        "preview_text" => "",
        "text" => "",
        "id_user" => "",
        "type" => "",
    ];

    public $rules = [
        'required' => [
            ["name"],
            ["type"],
            ["preview_text"],
            ["text"],
        ],
        // 'email' => [
        //     ['email'],
        // ],
        // 'lengthMin' =>[
        //     ["password", 6]
        // ]
    ];

    // public function getAll()
    // {
    //     return R::getAll($this->table);
    // }

    public function getAll(){
        $sql = "SELECT *, articles.id as post_id, articles.name as post_name, user.id as user_id from articles INNER JOIN user on id_user = user.id";
        return R::getAll($sql); 
    }

}