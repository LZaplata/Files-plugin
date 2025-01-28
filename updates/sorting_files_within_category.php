<?php namespace LZaplata\Files\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class SortingFilesWithinCategory extends Migration
{
    public function up()
    {
        Schema::table('lzaplata_files_files', function($table)
        {
            $table->dropColumn('position');
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_right');
            $table->dropColumn('nest_depth');
        });

        Schema::table('lzaplata_files_files_categories', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }

    public function down()
    {
        Schema::table('lzaplata_files_files', function($table)
        {
            $table->integer('position')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
        });

        Schema::table('lzaplata_files_files_categories', function($table)
        {
            $table->dropColumn('position');
        });
    }
}