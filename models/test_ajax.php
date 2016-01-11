<?php

namespace app\models;

use Yii;
use yii\base\Model;

class test_ajax extends Model
{
    public $text;


    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

public function getMessage(){

    $rezult=Yii::$app->db->createCommand('SELECT * FROM oc_customer WHERE status=:status  ')
        ->bindValue(':status',0)->queryAll();
    return $rezult;


}


}


?>