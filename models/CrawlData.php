<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crawl_data".
 *
 * @property string $name
 * @property string $tweet_id
 * @property string $text
 * @property string $created_post
 * @property string $different_year
 * @property string $keyword
 * @property string $class_hoax_info
 */
class CrawlData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'crawl_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tweet_id', 'text', 'created_post',  'keyword'], 'required'],
            [['text'], 'string'],
            [['name', 'tweet_id', 'created_post', 'keyword'], 'string', 'max' => 50],
            [['tweet_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'tweet_id' => 'Tweet ID',
            'text' => 'Text',
            'created_post' => 'Created Post',
            //'different_year' => 'Different Year',
            'keyword' => 'Keyword',
            //'class_hoax_info' => 'Class Hoax Info',
        ];
    }
}
