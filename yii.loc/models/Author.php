<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $photo
 * @property string $created_at
 * @property string $updated_at
 *
 * @property NewsAuthors[] $newsAuthors
 */
class Author extends \yii\db\ActiveRecord
{
    use TimestampBehavior;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'safe'],
            [['first_name', 'last_name', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'photo' => 'Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthors()
    {
        return $this->hasMany(Article::className(), ['id' => 'article_id'])
            ->viaTable('news_authors', ['author_id', 'id']);
    }
}
