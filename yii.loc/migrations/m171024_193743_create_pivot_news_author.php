<?php

use yii\db\Migration;

class m171024_193743_create_pivot_news_author extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('news_authors', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(255),
            'author_id' => $this->integer(255),
         ]);
        $this->addForeignKey('news_foreight_key', 'news_authors', 'article_id', 'news', 'id');
        $this->addForeignKey('authors_foreight_key', 'news_authors', 'author_id', 'authors', 'id');
    }

    public function down()
    {
        $this->dropTable('news_authors');
    }
}
