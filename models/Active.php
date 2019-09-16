<?php


namespace app\models;


use yii\base\Model;

class Active extends Model
{
    public $title;
    public $startDay;
    public $endDay;
    public $userId;
    public $description;
    public $repeat = false;
    public $blocked = false;


}