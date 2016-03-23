<?php

use yii\db\Schema;

class m160316_000101_jaendin extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('tbl_album_galeri', [
            'id_album' => $this->primaryKey(),
            'nama_album' => $this->string(100)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('tbl_album_galeri');
    }
}
