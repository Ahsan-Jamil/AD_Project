<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wrestlerprofile */

$this->title = $model->WP_id;
$this->params['breadcrumbs'][] = ['label' => 'Wrestlerprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrestlerprofile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->WP_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->WP_id], [
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
            'WP_id',
            'WP_RingName',
            'WP_RealName',
            'WP_Gender',
            'WP_Age',
            'WP_DebutYear',
            'WP_Height',
            'WP_Weight',
            'WP_Nationality',
            'WP_Roster',
        ],
    ]) ?>

</div>
