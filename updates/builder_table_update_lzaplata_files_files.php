<?php namespace LZaplata\Files\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLzaplataFilesFiles extends Migration
{
    public function up()
    {
        Schema::table('lzaplata_files_files', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('lzaplata_files_files', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
