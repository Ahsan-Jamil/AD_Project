<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Wrestlerprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wrestlerprofile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'WP_RingName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WP_RealName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WP_Gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'WP_Age')->textInput() ?>

    <?= $form->field($model, 'WP_DebutYear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WP_Height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WP_Weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WP_Nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WP_Roster')->dropDownList([ 'Raw' => 'Raw', 'SmackDown' => 'SmackDown', 'NXT' => 'NXT', 'CruserWeight Division' => 'CruserWeight Division', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
