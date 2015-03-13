<?php

namespace frontend\controllers;

use yii;

class ReportController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionReport1() {
        $sql = "select * from am_rpt1";
        //$rawData = \yii::$app->db->createCommand($sql)->queryAll();
        //print_r($rawData);

        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([

            'allModels' => $rawData,
            'pagination' => FALSE,
        ]);
        return $this->render('report1', [
                    'dataProvider' => $dataProvider,
                     'rawData'=>$rawData
        ]);
    }
    
    
    public function actionReport3($hoscode){
        $sql = "select hospcode,name,lname from person where hospcode=$hoscode";
        try {
            $rawData = \Yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([

            'allModels' => $rawData,
            'pagination' => FALSE,
        ]);
        return $this->render('report3', [
                    'dataProvider' => $dataProvider,
                    'sql'=>$sql,
                   
        ]);
        
    }

}
