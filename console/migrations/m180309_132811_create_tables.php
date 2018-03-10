<?php

use yii\db\Migration;

/**
 * Class m180309_132811_create_tables
 */
class m180309_132811_create_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->PrimaryKey(),
            'title' => $this->string(100),
            'url' => $this->string(100)->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');

        $this->createTable('post', [
            'id' => $this->PrimaryKey(),
            'title' => $this->string(100),
            'description' => $this->text(),
            'content' => $this->text(),
            'create_date' => $this->date(),
            'update_date' => $this->date(),
            'image' => $this->string(),
            'user_id' => $this->integer(),
            'category_id' => $this->integer(),
            'url' => $this->string(100)->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180309_132811_create_tables cannot be reverted.\n";
        $this->dropTable('category');
        $this->dropTable('post');
        $this->dropTable('user');
        return false;
    }
}
