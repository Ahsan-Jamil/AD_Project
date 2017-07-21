<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\cruserweightchamp */

$this->title = 'Create Cruserweightchamp';
$this->params['breadcrumbs'][] = ['label' => 'Cruserweightchamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cruserweightchamp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
