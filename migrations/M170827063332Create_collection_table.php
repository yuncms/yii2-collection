<?php

namespace yuncms\migrations;

use yii\db\Migration;

/**
 * Class M170827063332Create_collection_table
 */
class M170827063332Create_collection_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        /**
         * 用户收藏表
         */
        $this->createTable('{{%collections}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'model_id' => $this->integer()->notNull(),
            'model' => $this->string()->notNull(),
            'subject' => $this->string(),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'updated_at' => $this->integer()->unsigned()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('{{%collections_ibfk_1}}', '{{%collections}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'RESTRICT');
        $this->createIndex('collections_index', '{{%collections}}', ['model_id', 'model'], false);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%collections}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "M170827063332Create_collection_table cannot be reverted.\n";

        return false;
    }
    */
}
