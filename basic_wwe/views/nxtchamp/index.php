<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\nxtchampSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nxtchamps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nxtchamp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nxtchamp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'NC_id',
            'WP_id',
            'NC_Reign',
            'NC_DaysHeld',
            'NC_Event:ntext',
            // 'NC_Notes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
