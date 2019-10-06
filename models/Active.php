<?php
/**
 * Модель событие
 * @package app\models
 *
 * @property-read User $user
 */

namespace app\models;


use yii\db\ActiveRecord;

class Active extends ActiveRecord
{
//  public static function tableName()
//  {
//      return 'yii2active';
//  }

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

//    public function getUser()
//    {
//        return $this->hasOne(User::class, ['id' => 'user_id']);
//    }

}