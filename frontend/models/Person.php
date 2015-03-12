<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property string $HOSPCODE
 * @property string $CID
 * @property string $PID
 * @property string $HID
 * @property string $PRENAME
 * @property string $NAME
 * @property string $LNAME
 * @property string $HN
 * @property string $SEX
 * @property string $BIRTH
 * @property string $MSTATUS
 * @property string $OCCUPATION_OLD
 * @property string $OCCUPATION_NEW
 * @property string $RACE
 * @property string $NATION
 * @property string $RELIGION
 * @property string $EDUCATION
 * @property string $FSTATUS
 * @property string $FATHER
 * @property string $MOTHER
 * @property string $COUPLE
 * @property string $VSTATUS
 * @property string $MOVEIN
 * @property string $DISCHARGE
 * @property string $DDISCHARGE
 * @property string $ABOGROUP
 * @property string $RHGROUP
 * @property string $LABOR
 * @property string $PASSPORT
 * @property string $TYPEAREA
 * @property string $D_UPDATE
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOSPCODE', 'PID', 'PRENAME', 'NAME', 'LNAME', 'SEX', 'BIRTH', 'NATION', 'TYPEAREA', 'D_UPDATE'], 'required'],
            [['BIRTH', 'MOVEIN', 'DDISCHARGE', 'D_UPDATE'], 'safe'],
            [['HOSPCODE'], 'string', 'max' => 5],
            [['CID', 'FATHER', 'MOTHER', 'COUPLE'], 'string', 'max' => 13],
            [['PID', 'HN'], 'string', 'max' => 15],
            [['HID'], 'string', 'max' => 14],
            [['PRENAME', 'OCCUPATION_OLD', 'RACE', 'NATION'], 'string', 'max' => 3],
            [['NAME', 'LNAME'], 'string', 'max' => 50],
            [['SEX', 'MSTATUS', 'FSTATUS', 'VSTATUS', 'DISCHARGE', 'ABOGROUP', 'RHGROUP', 'TYPEAREA'], 'string', 'max' => 1],
            [['OCCUPATION_NEW'], 'string', 'max' => 4],
            [['RELIGION', 'EDUCATION', 'LABOR'], 'string', 'max' => 2],
            [['PASSPORT'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'HOSPCODE' => 'รหัสสถานบริการ',
            'CID' => '13 หลัก',
            'PID' => 'Pid',
            'HID' => 'Hid',
            'PRENAME' => 'Prename',
            'NAME' => 'ชื่อ',
            'LNAME' => 'นามสกุล',
            'HN' => 'Hn',
            'SEX' => 'Sex',
            'BIRTH' => 'Birth',
            'MSTATUS' => 'Mstatus',
            'OCCUPATION_OLD' => 'Occupation  Old',
            'OCCUPATION_NEW' => 'Occupation  New',
            'RACE' => 'Race',
            'NATION' => 'Nation',
            'RELIGION' => 'Religion',
            'EDUCATION' => 'Education',
            'FSTATUS' => 'Fstatus',
            'FATHER' => 'Father',
            'MOTHER' => 'Mother',
            'COUPLE' => 'Couple',
            'VSTATUS' => 'Vstatus',
            'MOVEIN' => 'Movein',
            'DISCHARGE' => 'Discharge',
            'DDISCHARGE' => 'Ddischarge',
            'ABOGROUP' => 'Abogroup',
            'RHGROUP' => 'Rhgroup',
            'LABOR' => 'Labor',
            'PASSPORT' => 'Passport',
            'TYPEAREA' => 'Typearea',
            'D_UPDATE' => 'D  Update',
        ];
    }
}
