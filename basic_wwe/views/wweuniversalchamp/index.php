<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WweuniversalchampSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'WWE Universal Championship';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wweuniversalchamp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Update the Championship History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'WUC_id',
            //'WP_id',

            // 'wP.WP_RingName',
            [
                'attribute' => 'WP_id',
                'value' => 'wP.WP_RingName',
            ],
            'WUC_Reign',
            'WUC_DaysHeld',
            'WUC_Event:ntext',
            // 'WUC_Notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
