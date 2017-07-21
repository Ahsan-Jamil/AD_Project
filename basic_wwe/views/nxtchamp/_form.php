<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\nxtchamp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nxtchamp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'WP_id')->textInput() ?>

    <?= $form->field($model, 'NC_Reign')->textInput() ?>

    <?= $form->field($model, 'NC_DaysHeld')->textInput() ?>

    <?= $form->field($model, 'NC_Event')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'NC_Notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
