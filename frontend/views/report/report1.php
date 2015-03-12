<?php
use kartik\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
   
    'panel' => [
        'before' => 'รายงาน xxxx',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d H:i:s')
    ]]
)
?>

