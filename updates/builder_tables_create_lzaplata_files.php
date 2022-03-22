<?php namespace LZaplata\Files\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTablesCreateLzaplataFiles extends Migration
{
    public function up()
    {
        Schema::create('lzaplata_files_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->integer('parent_id')->nullable()->unsigned();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
        
        Schema::create('lzaplata_files_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
        
        Schema::create('lzaplata_files_files_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('file_id')->unsigned();
            $table->integer('category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('lzaplata_files_categories');
        Schema::dropIfExists('lzaplata_files_files');
        Schema::dropIfExists('lzaplata_files_files_categories');
    }
}