<?php
/* @var $this yii\web\View */

$this->title = 'System Management';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-sm-4">
                <a href="" class="btn btn-danger">จัดการ USER</a>
            </div>

            <div class="col-sm-4">
                <a href="" class="btn btn-success">ประมวลผลรายงาน</a>
            </div>

        </div>

        <div id="show"></div>
    </div>

    <?php
    $route = yii::$app->urlManager->createUrl('processreport/exec');
    
    $script1 = <<< JS
            
    $('#btn_rpt').on('click', function(e) {                
    
    $('#show').html('กำลังประมวลผล...');          
    $.ajax({
       url: "$route_file_count",       
       success: function(data) {
             $('#show').html('');                
            alert(data+' สำเร็จ');            
       }
    });
});
JS;

    $this->registerJs($script1);
    