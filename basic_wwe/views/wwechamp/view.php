<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wwechamp */

$this->title = $model->WC_id;
$this->params['breadcrumbs'][] = ['label' => 'Wwechamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wwechamp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->WC_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->WC_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'WC_id',
            'WP_id',
            'WC_Reign',
            'WC_DaysHeld',
            'WC_Event:ntext',
            'WC_Notes:ntext',
        ],
    ]) ?>

</div>
