<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\nxtchampSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nxtchamp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'NC_id') ?>

    <?= $form->field($model, 'WP_id') ?>

    <?= $form->field($model, 'NC_Reign') ?>

    <?= $form->field($model, 'NC_DaysHeld') ?>

    <?= $form->field($model, 'NC_Event') ?>

    <?php // echo $form->field($model, 'NC_Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
