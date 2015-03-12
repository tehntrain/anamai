<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Anc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HOSPCODE')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'PID')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'SEQ')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'DATE_SERV')->textInput() ?>

    <?= $form->field($model, 'GRAVIDA')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'ANCNO')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'GA')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'ANCRESULT')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'ANCPLACE')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'PROVIDER')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'D_UPDATE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
