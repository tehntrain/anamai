<?php

use kartik\grid\GridView;
use yii\helpers\Html;

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
            'header' => 'รหัสสถานบริการ',
        ],
        [
            'attribute' => 'hosname',
            'format' => 'raw',
            'value' => function($model) {
                $hoscode = $model['hoscode'];
                $hosname = $model['hosname'];
                return Html::a(Html::encode($hosname), ['report/report3', 'hoscode' => $hoscode]);
            }
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

        <?php

        use miloschuman\highcharts\Highcharts;

Highcharts::widget([
            'scripts' => [
                'highcharts-more',
                'themes/grid'
            ]
        ]);
        ?>
        <div id="chart" style="padding-bottom: 10px"></div>
        <?php
        $categ = [];
        for ($i = 0; $i < count($rawData); $i++) {
            $categ[] = $rawData[$i]['hosname'];
            //array_push($categ,'vvvv');
        }     
        $js_categories = implode("','", $categ);
        
         $data = [];
        for ($i = 0; $i < count($rawData); $i++) {
            $data[] = $rawData[$i]['buddha'];
            //array_push($categ,'vvvv');
        }     
        $js_data = implode(",", $data);

        $this->registerJs("
$(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: ['$js_categories'],
            //crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'คน'
            }
        },
       
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'พุทธ',
            data: [$js_data]

        }]
    });
});


");
// จบ chart
        ?>

