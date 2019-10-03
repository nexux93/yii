<?php

/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 16.09.2019 : 13:55
 */

namespace app\controllers;

use app\models\Active;
use yii\base\Controller;
use yii\helpers\VarDumper;

class ActiveController extends Controller
{
    public function actionIndex($sort = false)
    {
        if (\Yii::$app->user->isGuest()) {
            return 'Tadada';

        } else {
            $query = Active::find();

            if ($sort) {
                $query->orderBy('is desc');
            }
            $rows = $query->all();

            return $this->render('index.twig', [
                'active' => $rows
            ]);
        }
    }

    public function actionView()
    {
        $activeItem = new Active();
        $activeItem->title = 'ABabinili';

        return $this->render('view.twig', [
            'model' => $activeItem
        ]);
    }

    public function actionCreate()
    {
        $activeItem = new Active();
        $activeItem->title = 'Create Quest';

        return $this->render('create.twig', [
            'model' => $activeItem
        ]);
    }

    public function actionDelite()
    {
        return 'Action@Delite';
    }

    public function actionSubmit()
    {
        $model = new Active();

        if ($model->load(\Yii::$app->request->post())) {

            if ($model->validate()) {

                $model->save();
                return 'Success' . VarDumper::export($model->attributes);

            } else {

                return "Failed" . VarDumper::export($model->errors);
            }
        }
        return 'Active@Submit';
    }
}