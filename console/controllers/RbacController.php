<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();

        // Role Admin
        $admin = $auth->createRole('admin');
        $auth->add($admin);

        // Role Cliente
        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);

        echo "RBAC criado com sucesso!\n";
    }
    public function actionAssignAdmin()
    {
        $auth = Yii::$app->authManager;

        $admin = $auth->getRole('admin');

        $auth->assign($admin, 1);

        echo "Admin atribuído!\n";
    }
}