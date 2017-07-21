<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\nxtchamp */

$this->title = 'Update Nxtchamp: ' . $model->NC_id;
$this->params['breadcrumbs'][] = ['label' => 'Nxtchamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NC_id, 'url' => ['view', 'id' => $model->NC_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nxtchamp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
