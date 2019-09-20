<?php
namespace app\models;
use yii\base\Model;

/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 17.09.2019 : 15:02
 */

class Active extends Model
{
    public $title = 'Абаби';
    public $startDay;
    public $endDay;
    public $userId;
    public $description;
    public $repeat = false;
    public $blocked = false;

}