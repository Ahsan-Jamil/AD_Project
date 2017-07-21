<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WweuniversalchampSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wweuniversalchamp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'WUC_id') ?>

    <?= $form->field($model, 'WP_id') ?>

    <?= $form->field($model, 'WUC_Reign') ?>

    <?= $form->field($model, 'WUC_DaysHeld') ?>

    <?= $form->field($model, 'WUC_Event') ?>

    <?php // echo $form->field($model, 'WUC_Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
