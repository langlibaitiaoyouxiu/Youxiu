<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property string $order_id 订单ID
 * @property int $order_num 订单号
 * @property int $user_id 会员ID
 * @property string $take_name 代练人
 * @property string $take_mobile 手机号
 * @property int $pay_type 支付方式
 * @property int $status 状态
 * @property int $create_time 订单生成时间
 * @property int $update_time 订单修改时间
 * @property string $count_price 订单实际总价
 * @property string $game_price 价格
 * @property string $remark 备注
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_num', 'user_id', 'create_time', 'update_time'], 'integer'],
            [['count_price', 'game_price'], 'number'],
            [['take_name'], 'string', 'max' => 40],
            [['take_mobile'], 'string', 'max' => 15],
            [['pay_type', 'status'], 'string', 'max' => 4],
            [['remark'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_num' => 'Order Num',
            'user_id' => 'User ID',
            'take_name' => 'Take Name',
            'take_mobile' => 'Take Mobile',
            'pay_type' => 'Pay Type',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'count_price' => 'Count Price',
            'game_price' => 'Game Price',
            'remark' => 'Remark',
        ];
    }
}
