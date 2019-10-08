<?php


namespace app\models;


use yii\base\Model;

class Active_old extends Model
{
    public $title;
    public $startDay;
    public $endDay;
    public $userId;
    public $description;
    public $email;
    public $repeat = false;
    public $blocked = false;

    public function rules()
    {
        return [
            [['email'], 'required'],
            [['description'], 'string', 'min' => 5, 'max' => 30],
            [['startDay', 'endDay'], 'date', 'format' => 'php: Y-m-d'],
            [['userId'], 'integer'],
            [['repeat', 'blocked'], 'boolean']
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Ваш email',
            'description' => 'Описание события',
            'startDay' => 'Дата начала',
            'endDay' => 'Дата конца',
            'repeat' => 'Повторяемое',
            'blocked' => 'Блокирующее',
        ];
    }


}