<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\cruserweightchamp */

$this->title = 'Update Cruserweightchamp: ' . $model->CW_id;
$this->params['breadcrumbs'][] = ['label' => 'Cruserweightchamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CW_id, 'url' => ['view', 'id' => $model->CW_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cruserweightchamp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
