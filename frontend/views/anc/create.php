<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Anc */

$this->title = 'Create Anc';
$this->params['breadcrumbs'][] = ['label' => 'Ancs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
