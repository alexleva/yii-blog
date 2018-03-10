<?php

use yii\db\Migration;

/**
 * Class m180309_134324_add_foreign_key
 */
class m180309_134324_add_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_category_page','post','category_id','category','id' );
        $this->addForeignKey('fk_user_page','post','user_id','{{%user}}','id' );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180309_134324_add_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180309_134324_add_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
