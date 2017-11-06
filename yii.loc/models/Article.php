<?php

namespace app\models;

use yii\db\ActiveRecord;


/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $image
 * @property string $published
 * @property string $created_at
 * @property string $updated_at
 *
 * @property NewsAuthors[] $newsAuthors
 */
class Article extends ActiveRecord
{
    use TimestampBehavior;
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 700],
            [['published'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'Image',
            'published' => 'Published',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])
            ->viaTable('news_authors', ['article_id' => 'id']);
    }
}
