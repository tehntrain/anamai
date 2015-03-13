<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sys_user_role".
 *
 * @property integer $role_id
 * @property string $role_name
 */
class UserRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sys_user_role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id'], 'required'],
            [['role_id'], 'integer'],
            [['role_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'role_name' => 'Role Name',
        ];
    }
}
