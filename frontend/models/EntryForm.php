<?php
/**
 * Created by PhpStorm.
 * User: fengkaizhi
 * Date: 16/8/3
 * Time: 12:04
 */

namespace app\models;
use Yii;
use yii\base\Model;
class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];

    }
    

}
