<?php
   use yii\db\Schema;
   use yii\db\Migration;
   class m160113_102634_add_news_table extends Migration {
      public function up() {
         $this->createTable("news", [
            "id" => Schema::TYPE_PK,
            "title" => Schema::TYPE_STRING,
            "content" => Schema::TYPE_TEXT,
         ]);
      }
      public function down() {
         $this->dropTable('news');
      }
      /*
      // Use safeUp/safeDown to run migration code within a transaction
      public function safeUp() {
	
      }
      public function safeDown() {

      }
      */
   }
?>
