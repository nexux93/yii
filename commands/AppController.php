<?php
/**
 * User: Ronzin Nikita (nexux93@yandex.ru)
 * Date: 03.10.2019 : 10:41
 */

namespace app\commands;


use app\models\User;
use yii\console\Controller;

class AppController extends Controller
{
    public function actionUser()
    {
        $admin = new User([
            'user_name'=> 'admin',
//            'password_hash' => '',
//            'auth_key' => '',
            'access_token' => 'test',
            'created_at' => time(),
            'updated_at' => time()
        ]);
        $admin->generateAuthKey();
        $admin->password = '9572';

        $admin->save();
    }
}