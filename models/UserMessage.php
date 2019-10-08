<?php
/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 18.09.2019 : 17:50
 */

namespace app\models;


use yii\base\Model;

class UserMessage extends Model
{
    public $email;
    public $content;
    public $title = 'Абадрп';

    public function attributeLabels()
    {
        return [
            'email' => 'Твой меч',
            'content' => 'Твой щит'
        ];
    }

    public function rules()
    {
        return [
          [['email', 'content'], 'required'],
          [['email'],'email'],
          [['content'], 'string', 'min'=> 5, 'max'=> 30]
        ];
    }

    public function actionResult()
    {
        return 'Thx!';
    }
}