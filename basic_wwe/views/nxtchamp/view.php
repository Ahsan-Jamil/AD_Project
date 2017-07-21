<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\nxtchamp */

$this->title = $model->NC_id;
$this->params['breadcrumbs'][] = ['label' => 'Nxtchamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nxtchamp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->NC_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->NC_id], [
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
            'NC_id',
            'WP_id',
            'NC_Reign',
            'NC_DaysHeld',
            'NC_Event:ntext',
            'NC_Notes:ntext',
        ],
    ]) ?>

</div>
