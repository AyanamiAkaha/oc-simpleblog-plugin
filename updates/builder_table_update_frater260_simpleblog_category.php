<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogCategory extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->integer('category_order')->unsigned()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->dropColumn('category_order');
        });
    }
}
