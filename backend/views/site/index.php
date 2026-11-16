<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Dashboard';
$username = Yii::$app->user->identity?->username;
?>
<div class="site-index">
    <!-- Welcome banner -->
    <div class="dashboard-banner text-black rounded-4 p-4 p-lg-5 mb-4">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <?= Html::img(
                    Yii::getAlias('@web/images/logoTriplan1.png'),
                    [
                        'alt' => 'Yii Framework', 'height' => 100,
                    ],
                ) ?>
            </div>
            <div class="col-lg-8">
                <h1 class="fw-bold mb-2">Bem-vindo, <?= mb_convert_case(Yii::$app->user->identity->username, MB_CASE_TITLE, "UTF-8") ?>.</h1>
                <p class="opacity-75 mb-0">
                    Este é o seu painel de administração. Faça a gestão da plataforma TripPlan a partir daqui.
                </p>
            </div>
            
        </div>
    </div>
</div>
