<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wwechamp */

$this->title = 'Update Wwechamp: ' . $model->WC_id;
$this->params['breadcrumbs'][] = ['label' => 'Wwechamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->WC_id, 'url' => ['view', 'id' => $model->WC_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wwechamp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
