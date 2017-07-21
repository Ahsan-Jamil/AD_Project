<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wrestlerprofile */

$this->title = 'Create Wrestlerprofile';
$this->params['breadcrumbs'][] = ['label' => 'Wrestlerprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrestlerprofile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
