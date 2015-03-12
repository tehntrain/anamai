<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AncSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'HOSPCODE') ?>

    <?= $form->field($model, 'PID') ?>

    <?= $form->field($model, 'SEQ') ?>

    <?= $form->field($model, 'DATE_SERV') ?>

    <?= $form->field($model, 'GRAVIDA') ?>

    <?php // echo $form->field($model, 'ANCNO') ?>

    <?php // echo $form->field($model, 'GA') ?>

    <?php // echo $form->field($model, 'ANCRESULT') ?>

    <?php // echo $form->field($model, 'ANCPLACE') ?>

    <?php // echo $form->field($model, 'PROVIDER') ?>

    <?php // echo $form->field($model, 'D_UPDATE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
