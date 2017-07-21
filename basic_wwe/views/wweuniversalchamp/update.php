<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wweuniversalchamp */

$this->title = 'Update Wweuniversalchamp: ' . $model->WUC_id;
$this->params['breadcrumbs'][] = ['label' => 'Wweuniversalchamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->WUC_id, 'url' => ['view', 'id' => $model->WUC_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wweuniversalchamp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
