<?php
/* @var $this yii\web\View */

$this->title = 'System Management';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">

            <div class="col-sm-4">
                <?php
                $route_user = yii::$app->urlManager->createUrl('user/index');
                ?>
                <a href="<?=$route_user?>" class="btn btn-danger">จัดการ USER</a>
            </div>

            <div class="col-sm-4">
                <button class="btn btn-success" id="btn_rpt">ประมวลผลรายงาน</button>
            </div>

        </div>

        <div id="show"></div>
    </div>

    <?php
    $route_exec = yii::$app->urlManager->createUrl('processreport/exec');
    
    $script1 = <<< JS
            
    $('#btn_rpt').on('click', function(e) {                
    
    $('#show').html('กำลังประมวลผล...');          
    $.ajax({
       url: "$route_exec",       
       success: function(data) {
             $('#show').html('');                
            alert(data+' สำเร็จ');            
       }
    });
});
JS;

    $this->registerJs($script1);
    