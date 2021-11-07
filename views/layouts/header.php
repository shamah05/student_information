<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<h5><strong>Yii2 Framework</strong> with<br> <strong>AdminLTE</strong> Template</h5>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <?= Html::a('<span class="label label-pill label-danger count"></span>',
                        ['/anomaly/default/notif'],
                        ['data-method' => 'post', 'class' => 'fa fa-bell','data-toggle'=>'tooltip','data-placement'=>'bottom', 'title'=>'Notifications']
                    ) ?>
                    </li>
                <li class="dropdown user user-menu">
                   <?= Html::a('Sign out',
                                ['/site/logout'],
                                ['data-method' => 'post', 'class' => 'fa fa-sign-out','data-toggle'=>'tooltip','data-placement'=>'bottom']
                                ) ?>
                </li>

            </ul>

        </div>
    </nav>
</header>

