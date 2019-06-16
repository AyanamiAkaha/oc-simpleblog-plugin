<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFrater260SimpleblogCategory3 extends Migration
{
    public function up()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->renameColumn('category_name', 'name');
            $table->renameColumn('category_order', 'sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('frater260_simpleblog_category', function($table)
        {
            $table->renameColumn('name', 'category_name');
            $table->renameColumn('sort_order', 'category_order');
        });
    }
}
