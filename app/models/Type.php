<?
namespace app\models;

use R;
use travel\core\base\Model;

class Type extends Model{
    
    public $table = 'type';

    // public $attributes = [
    //     "name" => "",
    //     "email" => "",
    //     "password" => "",
    //     "role" => 2,

    // ];

    // public $rules = [
    //     'required' => [
    //         ["name"],
    //         ["email"],
    //         ["password"],
    //     ],
    //     'email' => [
    //         ['email'],
    //     ],
    //     'lengthMin' =>[
    //         ["password", 6]
    //     ]
    // ];

    public function getAll()
    {
        return R::findAll($this->table);
    }


}