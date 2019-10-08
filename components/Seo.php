<?php
/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 17.09.2019 : 22:49
 */

namespace app\components;


use yii\base\Component;

class Seo extends Component
{
public function setTitle($value)
{
    \Yii::$app->view->title = $value;
}
}