<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log".
 *
 * @property string $log_id 日志ID
 * @property int $date_time 操作时间
 * @property int $update_time 修改次数
 * @property int $admin_id
 * @property string $log_desc
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_time', 'update_time', 'admin_id'], 'integer'],
            [['log_desc'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'date_time' => 'Date Time',
            'update_time' => 'Update Time',
            'admin_id' => 'Admin ID',
            'log_desc' => 'Log Desc',
        ];
    }
}
