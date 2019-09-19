<?php

/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 16.09.2019 : 13:55
 */

namespace app\controllers;


use app\models\Active;
use yii\base\Controller;

class ActiveController extends Controller
{
public function actionIndex() {
    \Yii::$app->seo->setTitle('mordor');
    return 'ok';
}
public function actionView() {
    $activeItem = new Active();
    $activeItem->title = 'ABabinili';

    return $this->render('view.twig', [
        'model' => $activeItem
    ]);
}
}