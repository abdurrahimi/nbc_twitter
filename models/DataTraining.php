<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_training".
 *
 * @property int $id_data_training
 * @property string|null $text
 * @property string|null $flag
 */
class DataTraining extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_training';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['flag'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_data_training' => 'Id Data Training',
            'text' => 'Text',
            'flag' => 'Flag',
        ];
    }
}
