<?php

use yii\db\Migration;

class m241202_014800_create_parfm_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('parfm', [
            'id' => $this->primaryKey(),
            'Название' => $this->string()->notNull(),
            'Тип' => $this->string()->notNull(),
            'Объем' => $this->integer()->notNull(),
            'Цена' => $this->integer()->notNull(),
            'Бренд' => $this->string()->notNull(),
            'Рейтинг' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('parfm');
    }
}