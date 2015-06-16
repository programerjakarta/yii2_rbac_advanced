<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
                    
        echo Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Menu Yii2</li>',
                    ['label' => '<i class="fa fa-file-code-o"></i><span>Gii</span>', 'url' => ['/gii']],
                    ['label' => '<i class="fa fa-dashboard"></i><span>Debug</span>', 'url' => ['/debug']],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>POST</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->can('createCity')
                    ],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->can('createCitya')
                    ],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->can('createCityb')
                    ],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->can('createCitys')
                    ],
                    [
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Sing in</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->can('createCitydf')
                    ],
                ],
            ]
        );
        

            NavBar::end();
        ?>



        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
