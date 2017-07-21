<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        'brandLabel' => 'Home',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
        [
            'label' => 'WWE Superstars',
            'items' => [
                ['label' => 'Show All Superstars','url' => ['/wrestlerprofile/index']],
                ['label' => 'Create A Superstar','url' => ['/wrestlerprofile/create']],
                ],
            ],
        [
            'label' => 'Rosters',
            'items' => [
                 ['label' => 'Raw', 'url' => ['/rawroster/index']],
                 ['label' => 'SmackDown', 'url' => ['/smackdownroster/index']],
                 ['label' => 'NXT', 'url' => ['/nxtroster/index']],
                 ['label' => 'Cruserweight Division', 'url' => ['/cruserweightroster/index']],
            ],
        ],
        [
            'label' => 'Championships',
            'items' => [
                 ['label' => 'WWE Universal Championship', 'url' => ['/wweuniversalchamp/index']],
                 ['label' => 'WWE Championship', 'url' => ['/wwechamp/index']],
                 ['label' => 'WWE Cruserweight Championship' , 'url' => ['/cruserweightchamp/index']],
                 ['label' => 'NXT Championship', 'url' => ['/nxtchamp/index']],
            ],
        ],
        /*[
            'label' => 'Login',
            'url' => ['site/login'],
            'visible' => Yii::$app->user->isGuest
        ], */
    ],
    'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; WWE Search Engine <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
