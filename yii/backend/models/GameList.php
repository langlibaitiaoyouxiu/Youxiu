<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "game_list".
 *
 * @property string $game_id 游戏ID
 * @property string $game_name 游戏名称
 * @property int $sort 排序
 * @property string $mai_ming 主图
 * @property int $is_hot 是否热门
 * @property string $desc_ribe 描述
 * @property string $code 游戏二维码
 * @property int $good 好评数
 * @property int $commonly 中评数
 * @property int $negative 差评
 * @property int $Raiders 攻略ID
 * @property int $is_new
 */
class GameList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */public static function tableName()
    {
        return 'game_list';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'good', 'commonly', 'negative', 'Raiders'], 'integer'],
            [['desc_ribe'], 'string'],
            [['game_name'], 'string', 'max' => 60],
            [['mai_ming'], 'string', 'max' => 80],
            [['is_hot', 'is_new'], 'string', 'max' => 1],
            [['code'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'game_id' => 'Game ID',
            'game_name' => 'Game Name',
            'sort' => 'Sort',
            'mai_ming' => 'Mai Ming',
            'is_hot' => 'Is Hot',
            'desc_ribe' => 'Desc Ribe',
            'code' => 'Code',
            'good' => 'Good',
            'commonly' => 'Commonly',
            'negative' => 'Negative',
            'Raiders' => 'Raiders',
            'is_new' => 'Is New',
        ];
    }
}
