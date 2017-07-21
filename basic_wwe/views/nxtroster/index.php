<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\WrestlerprofileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'NXT Roster';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrestlerprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'WP_id',
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
    ]); ?>
<?php Pjax::end(); ?></div>
