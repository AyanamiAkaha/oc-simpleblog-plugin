<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogCategory4 extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
