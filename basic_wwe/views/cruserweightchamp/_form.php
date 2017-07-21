<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cruserweightchamp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cruserweightchamp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'WP_id')->textInput() ?>

    <?= $form->field($model, 'CW_Reign')->textInput() ?>

    <?= $form->field($model, 'CW_DaysHeld')->textInput() ?>

    <?= $form->field($model, 'CW_Event')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'CW_Notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
