<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_rule".
 *
 * @property string $game_charge_id 规则ID
 * @property string $name 名称
 * @property int $leve_ling_game_id 代练游戏ID
 */
class GameRule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['leve_ling_game_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_charge_id' => 'Game Charge ID',
            'name' => 'Name',
            'leve_ling_game_id' => 'Leve Ling Game ID',
        ];
    }
}
