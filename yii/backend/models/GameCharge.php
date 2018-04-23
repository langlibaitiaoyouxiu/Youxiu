<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_charge".
 *
 * @property string $game_charge_id 游戏收费ID
 * @property int $dgame_id 代练游戏ID
 * @property string $charge_standard 收费标准
 * @property string $charge_price
 */
class GameCharge extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_charge';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dgame_id'], 'integer'],
            [['charge_price'], 'number'],
            [['charge_standard'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_charge_id' => 'Game Charge ID',
            'dgame_id' => 'Dgame ID',
            'charge_standard' => 'Charge Standard',
            'charge_price' => 'Charge Price',
        ];
    }
}
