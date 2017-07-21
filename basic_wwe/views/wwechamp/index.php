<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WwechampSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wwechamps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wwechamp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wwechamp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'WC_id',
            'WP_id',
            'WC_Reign',
            'WC_DaysHeld',
            'WC_Event:ntext',
            // 'WC_Notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
