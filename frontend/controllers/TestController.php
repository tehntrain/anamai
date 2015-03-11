<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {

        $a = 3;
        $b = 5;
        $sum = $a + $b;
        
        $param = ['sum' => $sum,'a'=>$a,'bb'=>$b];

        return $this->render('test1',$param );
    }// จบ test1
    
    
     public function actionTest2($name=null,$lname=null) {
         
         $info =  "Your name is $name $lname";
         return $this->render('test2',['info'=>$info]);
         
     }
    
    

}
