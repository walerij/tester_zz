<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property int $id_quest
 * @property string $answer
 * @property string $right
 */
class answersRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_quest'], 'integer'],
            [['answer', 'right'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_quest' => 'Id Quest',
            'answer' => 'Answer',
            'right' => 'Right',
        ];
    }
}
