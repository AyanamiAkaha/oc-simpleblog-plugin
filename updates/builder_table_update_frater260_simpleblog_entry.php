<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogEntry extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_entry', function($table)
        {
            $table->integer('category_id')->nullable();
            $table->dropColumn('cid');
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_entry', function($table)
        {
            $table->dropColumn('category_id');
            $table->integer('cid')->nullable()->default(NULL);
        });
    }
}
