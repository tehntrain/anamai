<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Anc */

$this->title = 'Update Anc: ' . ' ' . $model->HOSPCODE;
$this->params['breadcrumbs'][] = ['label' => 'Ancs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->HOSPCODE, 'url' => ['view', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
