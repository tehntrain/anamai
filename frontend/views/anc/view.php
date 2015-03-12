<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Anc */

$this->title = $model->HOSPCODE;
$this->params['breadcrumbs'][] = ['label' => 'Ancs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID, 'DATE_SERV' => $model->DATE_SERV], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'HOSPCODE',
            'PID',
            'SEQ',
            'DATE_SERV',
            'GRAVIDA',
            'ANCNO',
            'GA',
            'ANCRESULT',
            'ANCPLACE',
            'PROVIDER',
            'D_UPDATE',
        ],
    ]) ?>

</div>
