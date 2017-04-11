<?php

use yii\db\Migration;

class m170411_101701_create_table_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id'         => $this->primaryKey(),
            'name'       => $this->string()->notNull(),
            'email'      => $this->string()->notNull(),
            'comment'    => $this->text()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('post');
    }
}