<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\cruserweightchampSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cruserweightchamps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cruserweightchamp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cruserweightchamp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CW_id',
            'WP_id',
            'CW_Reign',
            'CW_DaysHeld',
            'CW_Event:ntext',
            // 'CW_Notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
