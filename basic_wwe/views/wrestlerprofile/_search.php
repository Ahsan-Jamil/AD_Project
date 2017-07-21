<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WrestlerprofileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wrestlerprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'WP_id') ?>

    <?= $form->field($model, 'WP_RingName') ?>

    <?= $form->field($model, 'WP_RealName') ?>

    <?= $form->field($model, 'WP_Gender') ?>

    <?= $form->field($model, 'WP_Age') ?>

    <?php // echo $form->field($model, 'WP_DebutYear') ?>

    <?php // echo $form->field($model, 'WP_Height') ?>

    <?php // echo $form->field($model, 'WP_Weight') ?>

    <?php // echo $form->field($model, 'WP_Nationality') ?>

    <?php // echo $form->field($model, 'WP_Roster') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
