<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_strateg".
 *
 * @property string $strateg_id 攻略ID
 * @property int $game_id 游戏ID
 * @property string $game_desc 攻略详情
 * @property string $strateg_name
 */
class GameStrateg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'game_strateg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['game_id'], 'integer'],
            [['game_desc'], 'string'],
            [['strateg_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'strateg_id' => 'Strateg ID',
            'game_id' => 'Game ID',
            'game_desc' => 'Game Desc',
            'strateg_name' => 'Strateg Name',
        ];
    }
}
