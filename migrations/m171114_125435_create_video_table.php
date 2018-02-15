<?php

use yii\db\Migration;

/**
 * Handles the creation of table `video`.
 */
class m171114_125435_create_video_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('video', [
            'id' => $this->primaryKey(),
            'judul' => $this->string(),
            'deskripsi' => $this->string(),
            'link_image' => $this->string(),
            'link_video' => $this->string(),
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('video');
    }
}
