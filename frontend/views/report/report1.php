<?php

use kartik\grid\GridView;

$this->params['breadcrumbs'][] = ['label' => 'รายงาน', 'url' => ['report/index']];
$this->params['breadcrumbs'][] = 'รายงานนับถือศาสนา';

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'panel' => [
        'before' => 'รายงาน xxxx',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ],
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'hoscode',
            'header' => 'รหัสสถานบริการ'
        ],
        [
            'attribute' => 'hosname',
            'header' => 'สถานบริการ'
        ],
        [
            'attribute' => 'total',
            'header' => 'ประชากรทั้งหมด(คน)'
        ],
        [
            'attribute' => 'buddha',
            'header' => 'ศาสนาพุทธ (คน)'
        ],
        [
            'attribute' => 'other',
            'header' => 'อื่นๆ (คน)'
        ],
    ]
]);
?>

