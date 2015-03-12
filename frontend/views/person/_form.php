<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HOSPCODE')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'CID')->textInput(['maxlength' => 13]) ?>

    <?= $form->field($model, 'PID')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'HID')->textInput(['maxlength' => 14]) ?>

    <?= $form->field($model, 'PRENAME')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'LNAME')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'HN')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'SEX')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'BIRTH')->textInput() ?>

    <?= $form->field($model, 'MSTATUS')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'OCCUPATION_OLD')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'OCCUPATION_NEW')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'RACE')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'NATION')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'RELIGION')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'EDUCATION')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'FSTATUS')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'FATHER')->textInput(['maxlength' => 13]) ?>

    <?= $form->field($model, 'MOTHER')->textInput(['maxlength' => 13]) ?>

    <?= $form->field($model, 'COUPLE')->textInput(['maxlength' => 13]) ?>

    <?= $form->field($model, 'VSTATUS')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'MOVEIN')->textInput() ?>

    <?= $form->field($model, 'DISCHARGE')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'DDISCHARGE')->textInput() ?>

    <?= $form->field($model, 'ABOGROUP')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'RHGROUP')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'LABOR')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'PASSPORT')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'TYPEAREA')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'D_UPDATE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
