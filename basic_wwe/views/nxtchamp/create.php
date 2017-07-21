<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\nxtchamp */

$this->title = 'Create Nxtchamp';
$this->params['breadcrumbs'][] = ['label' => 'Nxtchamps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nxtchamp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
