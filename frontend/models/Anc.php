<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "anc".
 *
 * @property string $HOSPCODE
 * @property string $PID
 * @property string $SEQ
 * @property string $DATE_SERV
 * @property string $GRAVIDA
 * @property string $ANCNO
 * @property string $GA
 * @property string $ANCRESULT
 * @property string $ANCPLACE
 * @property string $PROVIDER
 * @property string $D_UPDATE
 */
class Anc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anc';
    }
    
 

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOSPCODE', 'PID', 'DATE_SERV', 'GRAVIDA', 'ANCNO', 'GA', 'ANCRESULT', 'D_UPDATE'], 'required'],
            [['DATE_SERV', 'D_UPDATE'], 'safe'],
            [['HOSPCODE', 'ANCPLACE'], 'string', 'max' => 5],
            [['PID', 'PROVIDER'], 'string', 'max' => 15],
            [['SEQ'], 'string', 'max' => 16],
            [['GRAVIDA', 'GA'], 'string', 'max' => 2],
            [['ANCNO', 'ANCRESULT'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOSPCODE' => 'Hospcode',
            'PID' => 'Pid',
            'SEQ' => 'Seq',
            'DATE_SERV' => 'Date  Serv',
            'GRAVIDA' => 'Gravida',
            'ANCNO' => 'Ancno',
            'GA' => 'Ga',
            'ANCRESULT' => 'Ancresult',
            'ANCPLACE' => 'Ancplace',
            'PROVIDER' => 'Provider',
            'D_UPDATE' => 'D  Update',
        ];
    }
}
