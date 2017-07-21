<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wwechamp */

$this->title = 'Create Wwechamp';
$this->params['breadcrumbs'][] = ['label' => 'Wwechamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wwechamp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
