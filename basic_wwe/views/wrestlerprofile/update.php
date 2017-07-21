<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wrestlerprofile */

$this->title = 'Update Wrestlerprofile: ' . $model->WP_id;
$this->params['breadcrumbs'][] = ['label' => 'Wrestlerprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->WP_id, 'url' => ['view', 'id' => $model->WP_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wrestlerprofile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
