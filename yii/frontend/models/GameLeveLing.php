<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_leve_ling".
 *
 * @property string $dgame_id 代练游戏ID
 * @property string $leve_ling_name 代练游戏名称
 * @property int $leveling_status
 */
class GameLeveLing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_leve_ling';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['leve_ling_name'], 'string', 'max' => 50],
            [['leveling_status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dgame_id' => 'Dgame ID',
            'leve_ling_name' => 'Leve Ling Name',
            'leveling_status' => 'Leveling Status',
        ];
    }
}
