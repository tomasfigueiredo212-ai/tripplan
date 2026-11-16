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

        // Role Gestor de Conteúdos
        $gestorconteudos = $auth->createRole('gestorconteudos');
        $auth->add($gestorconteudos);

        // Role Gerente de Vendas
        $gerentevendas = $auth->createRole('gerentevendas');
        $auth->add($gerentevendas);

        // PERMISSOES
        $gerirConteudos = $auth->createPermission('gerirConteudos');
        $gerirConteudos->description = 'Gerir conteúdos do site';
        $auth->add($gerirConteudos);

        $gerirViagens = $auth->createPermission('gerirViagens');
        $gerirViagens->description = 'Gerir viagens';
        $auth->add($gerirViagens);

        // ATRIBUIR PERMISSOES AOS ROLES
        $auth->addChild($gestorconteudos, $gerirConteudos);

        $auth->addChild($gerentevendas, $gerirViagens);

        // ADMIN TEM TUDO
        $auth->addChild($admin, $gerirConteudos);
        $auth->addChild($admin, $gerirViagens);

        echo "RBAC criado com sucesso!\n";
    }
    public function actionAssignAdmin()
    {
        $auth = Yii::$app->authManager;

        $admin = $auth->getRole('admin');

        $auth->assign($admin, 1);

        echo "Admin atribuído!\n";
    }

    public function actionAssignGestorConteudos()
    {
    $auth = Yii::$app->authManager;

    $role = $auth->getRole('gestorconteudos');

    $auth->assign($role, 2);

    echo "Gestor de Conteudos atribuído!\n";
    }

    public function actionAssignGerenteVendas()
    {
    $auth = Yii::$app->authManager;

    $role = $auth->getRole('gerentevendas');

    $auth->assign($role, 3);

    echo "Gerente de Vendas atribuído!\n";
    }
}