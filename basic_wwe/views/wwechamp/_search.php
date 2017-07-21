<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WwechampSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wwechamp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'WC_id') ?>

    <?= $form->field($model, 'WP_id') ?>

    <?= $form->field($model, 'WC_Reign') ?>

    <?= $form->field($model, 'WC_DaysHeld') ?>

    <?= $form->field($model, 'WC_Event') ?>

    <?php // echo $form->field($model, 'WC_Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
