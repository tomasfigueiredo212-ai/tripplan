<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>" class="brand-link">
        <img src="../web/images/logoTriplan1.png" alt="TripPlan Logo" class="brand-image " style="">
        <span class="brand-text font-weight-light">TRIPPLAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block"><div class="info">
                        <a href="#" class="d-block">
                            <?= ucfirst(Yii::$app->user->identity->username) ?>
                        </a>
                    </div></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                            'items' => [
                                    [
                                            'label' => 'Dashboard',
                                            'icon' => 'tachometer-alt',
                                            'url' => ['site/index'],
                                    ],

                                    [
                                            'label' => 'Gestão',
                                            'header' => true
                                    ],

                                    [
                                            'label' => 'Utilizadores',
                                            'icon' => 'users',
                                            'url' => ['/user/index'],
                                    ],

                                    [
                                            'label' => 'Viagens',
                                            'icon' => 'plane',
                                            'url' => ['/trip/index'],
                                    ],

                                    [
                                            'label' => 'Reservas',
                                            'icon' => 'calendar-check',
                                            'url' => ['/booking/index'],
                                    ],

                                    [
                                            'label' => 'Logout',
                                            'icon' => 'sign-out-alt',
                                            'url' => ['/site/logout'],
                                    ],
                            ]
                    ],
                    ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    ['label' => 'Level1'],
                    [
                        'label' => 'Level1',
                        'items' => [
                            ['label' => 'Level2', 'iconStyle' => 'far'],
                            [
                                'label' => 'Level2',
                                'iconStyle' => 'far',
                                'items' => [
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                                ]
                            ],
                            ['label' => 'Level2', 'iconStyle' => 'far']
                        ]
                    ],
                    ['label' => 'Level1'],
                    ['label' => 'LABELS', 'header' => true],
                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>