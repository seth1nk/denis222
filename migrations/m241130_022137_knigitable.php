<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%knigi}}`.
 */
class m<m241130_022137_knigitable.php>_create_knigi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%knigi}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'author' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%knigi}}');
    }
}