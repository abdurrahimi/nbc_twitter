<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_training".
 *
 * @property int $text_id
 * @property string $tweet
 * @property string|null $tag
 */
class TblTraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tweet'], 'required'],
            [['tweet'], 'string'],
            [['tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'text_id' => 'Text ID',
            'tweet' => 'Tweet',
            'tag' => 'Tag',
        ];
    }
}
