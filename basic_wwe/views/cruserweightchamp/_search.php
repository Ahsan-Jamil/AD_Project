<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cruserweightchampSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cruserweightchamp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CW_id') ?>

    <?= $form->field($model, 'WP_id') ?>

    <?= $form->field($model, 'CW_Reign') ?>

    <?= $form->field($model, 'CW_DaysHeld') ?>

    <?= $form->field($model, 'CW_Event') ?>

    <?php // echo $form->field($model, 'CW_Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
