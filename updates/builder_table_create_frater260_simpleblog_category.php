<?php namespace Frater260\SimpleBlog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFrater260SimpleblogCategory extends Migration
{
    public function up()
    {
        Schema::create('frater260_simpleblog_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('cid');
            $table->string('category_name', 30)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('frater260_simpleblog_category');
    }
}
