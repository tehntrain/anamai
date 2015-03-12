<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AncSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ancs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel'=>[
            'before'=>'รายงาน xxxx',
            'after'=>'ประมวลผล ณ '.date('Y-m-d H:i:s')
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'HOSPCODE',
           
            'PID',
            'SEQ',
            'DATE_SERV',
            'GRAVIDA',
            // 'ANCNO',
            // 'GA',
            // 'ANCRESULT',
            // 'ANCPLACE',
            // 'PROVIDER',
            // 'D_UPDATE',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
