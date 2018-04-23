<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $user_id 用户ID
 * @property int $parent_id 父级ID
 * @property string $user_name 用户名
 * @property string $user_pwd 用户密码
 * @property string $user_mobile 用户手机
 * @property string $user_img 用户头像
 * @property string $nick_name 用户昵称
 * @property string $card_id 身份证号
 * @property int $create_time 创建时间
 * @property int $save_time 修改时间
 * @property string $real_name 真是姓名
 * @property int $status 账号状态
 * @property int $is_leveling 是否是代练
 * @property string $email
 * @property string $user_desc
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'create_time', 'save_time'], 'integer'],
            [['user_desc'], 'string'],
            [['user_name', 'nick_name', 'real_name'], 'string', 'max' => 40],
            [['user_pwd'], 'string', 'max' => 32],
            [['user_mobile'], 'string', 'max' => 15],
            [['user_img'], 'string', 'max' => 200],
            [['card_id'], 'string', 'max' => 20],
            [['status', 'is_leveling'], 'string', 'max' => 1],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'parent_id' => 'Parent ID',
            'user_name' => 'User Name',
            'user_pwd' => 'User Pwd',
            'user_mobile' => 'User Mobile',
            'user_img' => 'User Img',
            'nick_name' => 'Nick Name',
            'card_id' => 'Card ID',
            'create_time' => 'Create Time',
            'save_time' => 'Save Time',
            'real_name' => 'Real Name',
            'status' => 'Status',
            'is_leveling' => 'Is Leveling',
            'email' => 'Email',
            'user_desc' => 'User Desc',
        ];
    }
}
