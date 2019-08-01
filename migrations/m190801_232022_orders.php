<?php

use yii\db\Migration;

/**
 * Class m190801_232022_orders
 */
class m190801_232022_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190801_232022_orders cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('orders', [
            'id' => "integer NOT NULL AUTO_INCREMENT",
            'customer_name' => $this->string(80),
            'customer_email' => $this->string(120),
            'customer_mobile' => $this->string(40),
            'status' => $this->string(20),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'PRIMARY KEY(id)',
        ]);
    }

    public function down()
    {
        echo "m190801_232022_orders cannot be reverted.\n";

        return false;
    }
    
}
