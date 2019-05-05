<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quests".
 *
 * @property int $id
 * @property int $id_course
 * @property string $quest
 * @property int $many
 */
class questsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quests';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_course', 'many'], 'integer'],
            [['quest'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_course' => 'Id Course',
            'quest' => 'Quest',
            'many' => 'Many',
        ];
    }
}
