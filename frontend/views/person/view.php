<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Person */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'HOSPCODE' => $model->HOSPCODE, 'PID' => $model->PID], [
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
            'CID',
            'PID',
            'HID',
            'PRENAME',
            'NAME',
            'LNAME',
            'HN',
            'SEX',
            'BIRTH',
            'MSTATUS',
            'OCCUPATION_OLD',
            'OCCUPATION_NEW',
            'RACE',
            'NATION',
            'RELIGION',
            'EDUCATION',
            'FSTATUS',
            'FATHER',
            'MOTHER',
            'COUPLE',
            'VSTATUS',
            'MOVEIN',
            'DISCHARGE',
            'DDISCHARGE',
            'ABOGROUP',
            'RHGROUP',
            'LABOR',
            'PASSPORT',
            'TYPEAREA',
            'D_UPDATE',
        ],
    ]) ?>

</div>
