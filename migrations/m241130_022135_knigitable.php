<?php

use yii\db\Migration;

class m241130_022135_parftable extends Migration
{
    public function safeUp()
    {
        $this->createTable('parf', [
            'id' => $this->primaryKey(),
            'название' => $this->string()->notNull(),
            'тип' => $this->string()->notNull(),
            'объем' => $this->integer()->notNull(),
            'цена' => $this->integer()->notNull(),
            'бренд' => $this->string()->notNull(),
            'Рейтинг' => $this->string()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('parf');
    }
}